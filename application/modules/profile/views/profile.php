 <section 
 class="controller">
 <!-- ng-controller="NgProfileCtrl"  -->
    <div class="row modern-account-nav">
        
        <nav>

              <!--   <div class="col-4 desktop-4 should-be-a-link route {{route.image}}" ng-repeat="route in routes" >
                    <a href="#" ui-sref="{{route.account_route}}" class="account-menu" ui-sref-active-eq="active">{{route.name}}<span class="div-link-hack"></span></a>
                </div> -->
        </nav>
    </div>
    <div class="row modern-profile">
        <article class="col-12 col-desktop-3">
            <!-- <h3 class="modern-profile-title">business</h3> -->
            <aside class="interface">
                <div ui-view="actions">
                    ui view content  
                    <interestlist my-attr="<?php echo $username;?>"></interestlist>          
                </div>
                <h3 class="modern-profile-title"><?php echo $username;?>'s Interests</h3>
                 <?php echo Modules::run('chat/widget', $username); ?>
            </aside>
        </article>
        <article class="col-12 col-desktop-3">
            <!-- <h3 class="modern-profile-title">interests</h3> -->
            <aside class="interface">
                    <h1>oi-sendai</h1>
                    # oi-sendai
         
                    <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
                    **Pellentesque habitant morbi tristique** senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                    <h2>Header Level 2</h2>
                    ## Header Level 2
                             
                    <ol>
                       <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                       <li>Aliquam tincidunt mauris eu risus.</li>
                    </ol>
                    1. Lorem ipsum dolor sit amet

                    <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>
                    <!-- <div ui-view="status"> -->
                    <!-- </div> -->
            </aside>
        </article>
        <article class="col-12 col-desktop-6">
              <div class="row">
              # H1
              ## H2
              ### H3
              #### H4
              ##### H5
              ###### H6

              Alternatively, for H1 and H2, an underline-ish style:

              Alt-H1
              ======

              Alt-H2
              ------

              Emphasis, aka italics, with *asterisks* or _underscores_.

              Strong emphasis, aka bold, with **asterisks** or __underscores__.

              Combined emphasis with **asterisks and _underscores_**.

              Strikethrough uses two tildes. ~~Scratch this.~~

              1. First ordered list item
              2. Another item
              ⋅⋅* Unordered sub-list. 
              1. Actual numbers don't matter, just that it's a number
              ⋅⋅1. Ordered sub-list
              4. And another item.

              ⋅⋅⋅You can have properly indented paragraphs within list items. Notice the blank line above, and the leading spaces (at least one, but we'll use three here to also align the raw Markdown).

              ⋅⋅⋅To have a line break without a paragraph, you will need to use two trailing spaces.⋅⋅
              ⋅⋅⋅Note that this line is separate, but within the same paragraph.⋅⋅
              ⋅⋅⋅(This is contrary to the typical GFM line break behaviour, where trailing spaces are not required.)

              * Unordered list can use asterisks
              - Or minuses
              + Or pluses

              Here's our logo (hover to see the title text):

              Inline-style: 
              ![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 1")

              Reference-style: 
              ![alt text][logo]

              [logo]: https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 2"

              Inline `code` has `back-ticks around` it.

              ```javascript
              var s = "JavaScript syntax highlighting";
              alert(s);
              ```
               
              ```python
              s = "Python syntax highlighting"
              print s
              ```
               
              ```
              No language indicated, so no syntax highlighting. 
              But let's throw in a <b>tag</b>.
              ```

              Colons can be used to align columns.

              | Tables        | Are           | Cool  |
              | ------------- |:-------------:| -----:|
              | col 3 is      | right-aligned | $1600 |
              | col 2 is      | centered      |   $12 |
              | zebra stripes | are neat      |    $1 |

              The outer pipes (|) are optional, and you don't need to make the raw Markdown line up prettily. You can also use inline Markdown.

              Markdown | Less | Pretty
              --- | --- | ---
              *Still* | `renders` | **nicely**
              1 | 2 | 3      

              > Blockquotes are very handy in email to emulate reply text.
              > This line is part of the same quote.

              Quote break.

              > This is a very long line that will still be quoted properly when it wraps. Oh boy let's keep writing to make sure this is long enough to actually wrap for everyone. Oh, you can *put* **Markdown** into a blockquote. 

              Three or more...

              ---

              Hyphens

              ***

              Asterisks

              ___

              Underscores

              Here's a line for us to start with.

              This line is separated from the one above by two newlines, so it will be a *separate paragraph*.

              This line is also a separate paragraph, but...
              This line is only separated by a single newline, so it's a separate line in the *same paragraph*.

              [![IMAGE ALT TEXT HERE](http://img.youtube.com/vi/YOUTUBE_VIDEO_ID_HERE/0.jpg)](https://www.youtube.com/watch?v=JTnBpIDJ34E)
              </div>
            <!-- <h3 class="modern-profile-title">profile</h3> -->
                <main class="interface">
                    <div ui-view="content">
                        <activeinterest my-attr="<?php echo $username;?>"></activeinterest>
                        ui view content
                    </div>
                </main>
              <div class="row">
            <!-- </div> -->
        </article>
    </div><!-- end row fluid -->
</section>




