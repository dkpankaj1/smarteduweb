@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jodit@latest/es2021/jodit.fat.min.css" />
@endpush

<textarea id="editor"></textarea>

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/jodit@latest/es2021/jodit.fat.min.js"></script>

    <script>
        const editor = Jodit.make('#editor', {
            buttons: [
                'source', '|',  // HTML Source View
                'bold', 'italic', 'underline', 'strikethrough', '|',  // Text Formatting
                'superscript', 'subscript', '|',  // Small text positioning
                'ul', 'ol', 'outdent', 'indent', '|', // Lists & Indentation
                'font', 'fontsize', 'brush', '|', // Fonts, Colors
                'paragraph', 'lineHeight', 'align', '|', // Paragraph & Alignment
                'table', 'hr', '|', // Tables & Horizontal Line
                'link', 'image', 'video', '|', // Media Insert
                'undo', 'redo', '|', // Undo & Redo
                'fullsize', 'preview', '|', // Fullscreen & Preview
                'formatBlock' // Heading Selector (H1-H7, Paragraph)
            ],
            uploader: {
                insertImageAsBase64URI: true // Base64 Image Support
            },
            toolbarSticky: true, // Toolbar sticks while scrolling
            height: 400, // Editor height
            showCharsCounter: false, // Hide character count
            showWordsCounter: false, // Hide word count
            showXPathInStatusbar: false, // Hide status bar
            defaultActionOnPaste: "insert_clear_html", // Clean paste content
            style: {
                h1: { fontSize: '32px', fontWeight: 'bold' },
                h2: { fontSize: '28px', fontWeight: 'bold' },
                h3: { fontSize: '24px', fontWeight: 'bold' },
                h4: { fontSize: '20px', fontWeight: 'bold' },
                h5: { fontSize: '18px', fontWeight: 'bold' },
                h6: { fontSize: '16px', fontWeight: 'bold' },
                h7: { fontSize: '14px', fontWeight: 'bold' } // Custom H7 styling
            }
        });
    </script>
@endpush
