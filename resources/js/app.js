import './bootstrap';
// resources/js/app.js

import hljs from 'highlight.js/lib/core';
import javascript from 'highlight.js/lib/languages/javascript';
import 'highlight.js/styles/atom-one-dark.css'; // Pilih gaya tema yang sesuai

hljs.registerLanguage('javascript', javascript);

document.addEventListener('DOMContentLoaded', (event) => {
    // Ambil semua elemen <code>
    const codeElements = document.querySelectorAll('article code');

    // // Iterasi setiap elemen dan tambahkan ke dalam elemen <pre>
    codeElements.forEach((codeElement) => {
        const preElement = document.createElement('pre');
        preElement.appendChild(codeElement.cloneNode(true));
        codeElement.parentNode.replaceChild(preElement, codeElement);
    });

    // Sorot kode menggunakan Highlight.js
    document.querySelectorAll('article pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });
});