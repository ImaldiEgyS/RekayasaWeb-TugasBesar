<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulma Modal Fx</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
    <link rel="stylesheet" href="dist/css/modal-fx.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-light.min.css">
    <style>
        pre { background-color: #fafafa; }
        .container p { margin-bottom: 1rem }
        ul li { margin: 10px 20px; 0}
        .spacer { margin: 3rem 0 0 }
        a.link { border-bottom: 1px dashed rgba(255, 255, 255, .8) }
    </style>
</head>

<body>
    <section class="hero is-primary is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-1">
                    Modal FX
                </h1>
                <h2 class="subtitle">
                    Modal effects for <a class="link" href="https://bulma.io">Bulma.io</a>
                </h2>
            </div>
            <a href="https://github.com/postare/bulma-modal-fx"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <p>A set of modal window effects with CSS transitions and animations for Bulma. Very inspired by this Codrops resource/article: <a href="https://github.com/codrops/ModalWindowEffects">https://github.com/codrops/ModalWindowEffects</a></p>
            <p>GitHub repo: <a href="https://github.com/postare/bulma-modal-fx">https://github.com/postare/bulma-modal-fx</a></p>
        </div>
    </section>
    <section class="section">
        <div class="container">
        <h3 class="title is-4">
            Effects
        </h3>
        <div class="buttons">
            <span class="button is-primary is-medium modal-button" data-target="modal-normal">normal</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-fadeInScale">fadeInScale</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-slideRight">slideRight</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-slideLeft">slideLeft</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-slideTop">slideTop</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-slideBottom">slideBottom</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-fall">fall</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-slideFall">slideFall</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-newsPaper">newsPaper</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-3dFlipVertical">3dFlipVertical</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-3dFlipHorizontal">3dFlipHorizontal</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-3dSign">3dSign</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-3dSignDown">3dSignDown</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-superScaled">superScaled</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-3dSlit">3dSlit</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-3dRotateFromBottom">3dRotateFromBottom</span>
            <span class="button is-primary is-medium modal-button" data-target="modal-3dRotateFromLeft">3dRotateFromLeft</span>
        </div>
        <div class="container"></div>
    </section>

    <section class="section">
        <div class="container">
        <h3 class="title is-4">
            Examples
        </h3>
        <div class="buttons">
            <span class="button is-warning is-medium modal-button" data-target="modal-image">Image modal</span>
            <span class="button is-warning is-medium modal-button" data-target="modal-image2">Image modal "huge"</span>
            <span class="button is-warning is-medium modal-button" data-target="modal-image3">Image modal "huge" (very high)</span>
            <span class="button is-warning is-medium modal-button" data-target="modal-card">Card "tiny"</span>
            <span class="button is-warning is-medium modal-button" data-target="modal-fadeInScale-fs">Modal Card "full-screen"</span>
            <span class="button is-warning is-medium modal-button" data-target="modal-3dSign-top">3dSign "top"</span>
            <span class="button is-warning is-medium modal-button" data-target="modal-3dSign-bottom">3dSignDown "bottom"</span>
            <span class="button is-warning is-medium modal-button" data-target="modal-bgImage">Background Image</span>
        </div>
        <div class="container"></div>
    </section>

    <section class="section">
        <div class="container">
            <h3 class="title is-4">
                INSTALL
            </h3>
            <p>Use npm: <code>npm i bulma-modal-fx</code></p>
            <p>or simply download latest release:
            <a class="button is-success is-small" href="https://github.com/postare/bulma-modal-fx/releases/download/v1.0.2/bulma-modal-fx-v1.0.2.zip">Download</a></p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h3 class="title is-4">
                Getting started
            </h3>
            <p>Include the plugin css file:</p>
            <figure class="highlight">
                <pre><code class="html">&lt;link rel="stylesheet" href="dist/css/modal-fx.min.css" /&gt;</code></pre>
            </figure>
            <p>(optional) Include the plugin just before body closing tag:</p>
            <figure class="highlight">
                <pre><code class="html">&lt;script type="text/javascript" src="dist/js/modal-fx.min.js"&gt;&lt;/script&gt;</code></pre>
            </figure>
            <div class="spacer"></div>
            <p><strong>Or use a CDN:</strong></p>
            <figure class="highlight">
                <pre><code class="html">&lt;link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx@1.1.0/dist/css/modal-fx.min.css" /&gt;</code></pre>
            </figure>
            <figure class="highlight">
                <pre><code class="html">&lt;script type="text/javascript" src="https://unpkg.com/bulma-modal-fx@1.1.0/dist/js/modal-fx.min.js"&gt;&lt;/script&gt;</code></pre>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h3 class="title is-4">
                Html markup
            </h3>
            <figure class="highlight">
                <pre><code class="html">&lt;!-- trigger button --&gt;
&lt;span class="button modal-button" data-target="modal-id">Open modal&lt;/span&gt;

&lt;!-- related modal with fx class "modal-fx-fadeInScale" --&gt;
&lt;div id="modal-id" class="modal <em>modal-fx-fadeInScale</em>"&gt;
    &lt;div class="modal-background"&gt;&lt;/div&gt;
    &lt;div class="modal-content"&gt;
        &lt;!-- Any other Bulma elements you want --&gt;
    &lt;/div&gt;
    &lt;button class="modal-close is-large" aria-label="close"&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- To activate the modal, just add the is-active modifier on the .modal container --&gt;
&lt;div id="modal-id" class="modal modal-fx-fadeInScale <em>is-active</em>"&gt;&lt;/div&gt;[...]
</code></pre>
            </figure>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
            <h3 class="title is-4">
                Modifiers
            </h3>
            
            <p>Class modifiers <code>.modal</code>:</p>
            <ul>
                <li><code>.modal-pos-top</code>: modal positioned on top</li>
                <li><code>.modal-pos-bottom</code>:  modal positioned on bottom</li>
                <li><code>.modal-full-screen</code>:  modal full screen</li>
            </ul>

            <div class="spacer"></div>

            <p>Class modifiers <code>.modal-content</code>:</p>
            <ul>
                <li><code>.is-huge</code>: 100% width modal</li>
                <li><code>.is-tiny</code>: 400px width modal</li>
                <li><code>.is-image</code>: if the content is an image</li>
            </ul>

            <div class="spacer"></div>           

            <p>Example:</p>
            <figure class="highlight">
                <pre><code class="html">// Tiny bottom positioned modal
&lt;div id="modal-id" class="modal modal-fx-fadeInScale <em>modal-pos-bottom</em>"&gt;
    &lt;div class="modal-background"&gt;&lt;/div&gt;
    &lt;div class="modal-content <em>is-tiny</em>"&gt;
        &lt;!-- Any other Bulma elements you want --&gt;
    &lt;/div&gt;
    &lt;button class="modal-close is-large" aria-label="close"&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
            </figure>

            <p>Example full screen modal card:</p>
            <p></p>
            <figure class="highlight">
                <pre><code class="html">&lt;div id="modal-fadeInScale-fs" class="modal modal-full-screen modal-fx-fadeInScale"&gt;
    &lt;div class="modal-content modal-card"&gt;
        &lt;header class="modal-card-head"&gt;
            &lt;p class="modal-card-title"&gt;Modal title&lt;/p&gt;
            &lt;button class="modal-button-close delete" aria-label="close"&gt;&lt;/button&gt;
        &lt;/header&gt;
        &lt;section class="modal-card-body"&gt;
        &lt;!-- Modal card body --&gt;
        &lt;/section&gt;
        &lt;footer class="modal-card-foot"&gt;
            &lt;button class="modal-button-close button is-success"&gt;Save changes&lt;/button&gt;
            &lt;button class="modal-button-close button"&gt;Cancel&lt;/button&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h3 class="title is-4">
                Sass variables
            </h3>
            
            <figure class="highlight">
                <pre><code class="sass">// Modal minimal setup
$transition-duration: .3s;
$transition-duration-newsPaper: .7s;
$transition-duration-3dslit: .5s;

$modal-perspective: 1300px;
$modal-bg-color: rgba($black,.86);</code></pre>
            </figure>
        </div>
    </section>
    
</section>
    <footer class="footer">
        <div class="container has-text-centered">
            <p>
                <small>
                    Source code licensed
                    <a href="https://opensource.org/licenses/mit-license.php">MIT</a>.
                    <br> Website content licensed
                    <a rel="license" href="https://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a>.
                </small>
            </p>
        </div>
    </footer>
    <!-- normal -->
    <div id="modal-normal" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- fadeInScale -->
    <div id="modal-fadeInScale" class="modal modal-fx-fadeInScale">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- slideRight -->
    <div id="modal-slideRight" class="modal modal-fx-slideRight">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- slideLeft -->
    <div id="modal-slideLeft" class="modal modal-fx-slideLeft">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- slideTop -->
    <div id="modal-slideTop" class="modal modal-fx-slideTop">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- slideBottom -->
    <div id="modal-slideBottom" class="modal modal-fx-slideBottom">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- fall -->
    <div id="modal-fall" class="modal modal-fx-fall">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- slideFall -->
    <div id="modal-slideFall" class="modal modal-fx-slideFall">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- newsPaper -->
    <div id="modal-newsPaper" class="modal modal-fx-newsPaper">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- 3dFlipVertical -->
    <div id="modal-3dFlipVertical" class="modal modal-fx-3dFlipVertical">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- 3dFlipHorizontal -->
    <div id="modal-3dFlipHorizontal" class="modal modal-fx-3dFlipHorizontal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- 3dSign -->
    <div id="modal-3dSign" class="modal modal-fx-3dSign">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- 3dSignDown -->
    <div id="modal-3dSignDown" class="modal modal-fx-3dSignDown">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- superScaled -->
    <div id="modal-superScaled" class="modal modal-fx-superScaled">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- 3dSlit -->
    <div id="modal-3dSlit" class="modal modal-fx-3dSlit">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- 3dRotateFromBottom -->
    <div id="modal-3dRotateFromBottom" class="modal modal-fx-3dRotateFromBottom">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- 3dRotateFromLeft -->
    <div id="modal-3dRotateFromLeft" class="modal modal-fx-3dRotateFromLeft">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    
    <!-- Other Examples -->
    <!-- Image modal -->
    <div id="modal-image" class="modal modal-fx-superScaled">
        <div class="modal-background"></div>
        <div class="modal-content is-image">
            <!-- content -->
            <img src="img/moon.jpg" alt="Moon">
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <!-- Image modal -->
    <div id="modal-image2" class="modal modal-fx-superScaled">
        <div class="modal-background"></div>
        <div class="modal-content is-huge is-image">
            <!-- content -->
            <img src="img/moon.jpg" alt="Moon">
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!-- Image modal -->
    <div id="modal-image3" class="modal modal-fx-superScaled">
        <div class="modal-background"></div>
        <div class="modal-content is-huge is-image">
            <!-- content -->
            <img src="img/tower.jpg" alt="Tower">
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <!-- modal-fadeInScale-fs top -->
    <div id="modal-fadeInScale-fs" class="modal modal-full-screen modal-fx-fadeInScale">
        <div class="modal-content modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="modal-button-close delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat. Molestiae
                maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio mollitia
                facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet cupiditate accusantium
                vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </section>
            <footer class="modal-card-foot">
                <button class="modal-button-close button is-success">Save changes</button>
                <button class="modal-button-close button">Cancel</button>
            </footer>
        </div>
    </div>
    <!-- 3dSign top -->
    <div id="modal-3dSign-top" class="modal modal-pos-top modal-fx-3dSign">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <!-- 3dSign bottom -->
    <div id="modal-3dSign-bottom" class="modal modal-pos-bottom modal-fx-3dSignDown">
        <div class="modal-background"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero! Nisi hic vel aspernatur doloremque enim ut blanditiis perferendis, repudiandae
                assumenda quibusdam delectus quam eum non maxime ullam quod qui ab in dolorem dolores vero amet! Perferendis
                incidunt unde blanditiis harum vel velit, accusantium praesentium autem ut voluptas, voluptatibus fugiat.
                Molestiae maiores aspernatur expedita, magnam commodi suscipit explicabo labore temporibus tenetur distinctio
                mollitia facere eum ad officia? Sit eaque culpa ea saepe facilis. Consequatur, architecto. Optio eveniet
                cupiditate accusantium vero consectetur, maiores eum culpa assumenda reprehenderit sequi aut nihil!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <!-- 3dFlipVertical -->
    <div id="modal-3dFlipVertical-tiny" class="modal modal-fx-3dFlipVertical">
        <div class="modal-background"></div>
        <div class="modal-content is-tiny">
            <!-- content -->
            <div class="box">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae cum enim quisquam ducimus, facilis, esse nesciunt porro,
                officiis totam veniam libero!
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <!-- 3dFlipVertical card tiny -->
    <div id="modal-card" class="modal modal-fx-3dSlit">
        <div class="modal-background"></div>
        <div class="modal-content is-tiny">
            <!-- content -->
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="img/card.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="img/avatar.jpg" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">John Doe</p>
                            <p class="subtitle is-6">@johndoe</p>
                        </div>
                    </div>
    
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                        <a>@bulmaio</a>.
                        <a href="#">#css</a>
                        <a href="#">#responsive</a>
                        <br>
                        <time datetime="2018-1-1">12:30 PM - 16 Mar 2018</time>
                    </div>
                </div>
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <div id="modal-bgImage" class="modal modal-fx-3dSignDown">
        <div class="modal-background" style="background-image:url(img/moon.jpg)"></div>
        <div class="modal-content">
            <!-- content -->
<pre><code class="html">&lt;div id="modal-id" class="modal <em>modal-fx-fadeInScale</em>"&gt;
    &lt;div class="modal-background" style="background-image:url(img/moon.jpg)"&gt;&lt;/div&gt;
    &lt;div class="modal-content"&gt;
        &lt;!-- Any other Bulma elements you want --&gt;
    &lt;/div&gt;
    &lt;button class="modal-close is-large" aria-label="close"&gt;&lt;/button&gt;
&lt;/div&gt;
</code></pre>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <script src="dist/js/modal-fx.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>
        // highlight.js
        (function () {
            document.querySelectorAll('pre code').forEach(function (block) {
                hljs.highlightBlock(block);
            });
        })();
    </script>
</body>

</html>
