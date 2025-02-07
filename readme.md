### How to install

- Edit your theme `footer.php` and paste code before </body> tag.
- Copy `scroll-top.png` image to your theme dir.
- Modify img src path.

### Settings

`#wpfront-scroll-top-container { ... transition: opacity 0.2s linear;` - Show/hide icon animation duration and type.

`setTimeout( ... scrollTop.style.display = 'none';}, 200)` - Full hiding icon. This time may equal to previous value.

`#wpfront-scroll-top-container { ... right: 20px;bottom: 20px;` - Scroll-top icon position.

`if (window.scrollY > 100)` - Top offset height, when scroll-top icon shows.



