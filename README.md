# AFblog

A light blogging engine based on Kirby v2.5.2

Custom features:

- Image tag: CSS-corrected the default image tag to make it look prettier

- Polaroid tag: When making a blog post, instead of inserting an image using (image:url), you can use (polaroid:url) instead.  This will square-off the picture and add a polaroid border around it.  It also supports "caption" - e.g. (polaroid:url caption:something-something)

- Youtube tag: Overwrote the default Kirby youtube tag with one that dynamically scales with the browser width, as well as automaticaly formats the URL to the embed format

