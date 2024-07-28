document.addEventListener('DOMContentLoaded', function () {
    // Initialize Quill editor
    var quill = new Quill('#editor', {
        modules: {
            syntax: true,
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],
                ['link', 'image', 'video', 'formula'],

                [{'header': 1}, {'header': 2}],               // custom button values
                [{'list': 'ordered'}, {'list': 'bullet'}, {'list': 'check'}],
                [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
                [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
                [{'direction': 'rtl'}],                         // text direction

                [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
                [{'header': [1, 2, 3, 4, 5, 6, false]}],

                [{'color': []}, {'background': []}],          // dropdown with defaults from theme
                [{'font': []}],
                [{'align': []}],

                ['clean']                                         // remove formatting button
            ]
        },
        theme: 'snow'
    });

    function replaceCodeBlockContainers(htmlString) {
        var tempDiv = document.createElement('div');
        tempDiv.innerHTML = htmlString;
        var codeBlockContainers = tempDiv.querySelectorAll('div.ql-code-block-container');

        codeBlockContainers.forEach(div => {
            var pre = document.createElement('pre');
            pre.innerHTML = div.innerHTML;
            div.parentNode.replaceChild(pre, div);
        });

        return tempDiv.innerHTML;
    }

    function removeSelectElements(htmlString) {
        var tempDiv = document.createElement('div');
        tempDiv.innerHTML = htmlString;
        var selectElements = tempDiv.querySelectorAll('select');

        selectElements.forEach(select => {
            select.parentNode.removeChild(select);
        });

        return tempDiv.innerHTML;
    }

    document.querySelector('#postForm').onsubmit = function () {
        var bodyInput = document.querySelector('#body-input');
        var quillHtml = quill.root.innerHTML;
        var cleanHtml = removeSelectElements(quillHtml);
        cleanHtml = replaceCodeBlockContainers(cleanHtml);
        var sanitizedHtml = DOMPurify.sanitize(cleanHtml);

        if (sanitizedHtml.trim() === "") {
            alert("Post body cannot be empty!");
            return false;
        }

        bodyInput.value = sanitizedHtml;
    };
});