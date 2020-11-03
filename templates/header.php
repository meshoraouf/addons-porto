
<?php
 function header_porto_ele($nav_header , $settings){
    
  ?>

 <header id="header" class="site-header pop-header">

    
     <section v-bind:class="'home svg_shape bg_image ' + [header ? '' : 'bg-dark pb-1']" id="home"
        v-bind:style="[header ? { backgroundImage: 'url(' + info[0].img_info + ')' } : ''] " 
            >
            <div  v-bind:class="[header ? 'full_height' : '']"  >

 <nav class="navbar navbar-expand-lg <?php if($settings['porto_scroll_active']=="yes") { ?> fixed-top navbar-fixed-top <?php } ?> nav_background">
                    <div class="container">
                        <div class="navbar-header">


                            <a class="site-branding navbar-brand">
                                {{ info[0].f_name }}
                                <?php
        //the_custom_logo();
         
  
        ?>
        
                            </a><!-- .site-branding -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span><i class="fas fa-ellipsis-h"></i></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                          <ul class="menu nav-menu nav navbar-nav mr-auto" >
                            <li v-for="item in menu"  v-if="item.parent==0"  v-bind:class="'menu-item nav-item ' + [ item.a_parent!=0 ? 'dropdown'  : '' ]">
                                   
                                   <a href="#" v-on:click="get_page_content(item.page)"  v-bind:data-page="item.page" v-bind:title="item.title" class="nav-link" v-if="item.a_parent==0"> {{  item.title }}</a>

                                   <a href="#" v-bind:title="item.title"  v-if="item.a_parent!=0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  class="dropdown-toggle nav-link"> {{  item.title }}</a>
                                   
                                      <ul class="menu-item nav-item dropdown-menu">
                                         <li class="menu-item nav-item "  v-for="item_child in submenu" v-if="item_child.parent == item.a_parent">
                                         <a href="#" class="dropdown-item" v-bind:title="item_child.title"> {{  item_child.title }}</a>

                                         </li>
                                      </ul>
                            </li>
                          
                          </ul>
<?php

                    
        
        
?>

                          
                        <?php  ?>
                        </div>
                    </div>
                    <!--.container-->
                </nav>
       
        
         
                <div v-if="header" class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <h3>Hello, I'm   {{ info[0].f_name }}   {{ info[0].l_name }} </h3>
                            <h1 class="cd-headline letters rotate-2 is-full-width">
                                <span class="cd-words-wrapper">
                                <?php 
                                 $title_jobs = get_data_info('title_jobs');
                                                                      
                                foreach($title_jobs as $row => $job ) {?>
                                    <b <?php if($row==0){ ?> class="is-visible" <?php } ?> ><?php echo $job ; ?></b>
                                   <?php
                                }
                                
                                ?>
                                </span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div v-if="header" class="cv_download">
                    <button type="button">Download My Resume</button>
                </div>
                <div v-if="header" class="container go_down_container">
                <div class="go_down">
                    <a href="#about" class="smooth_scroll">
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <svg v-if="header" class="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill: #fff;">
                <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
            </svg>
              
            </div>
        </section>
    </header><!-- #masthead -->

<?php

 }



 ?>
    