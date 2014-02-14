<?php
/*
Template Name: List
*/
?>

<?php get_header() ?>

<div id="content-wrapper">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="12u">
                    <section>

                        <!-- The Content -->
                        <?php the_post() ?>
                        <div id="post-<?php the_ID(); ?>" class="post">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <div class="post-content">
                                <?php the_content() ?>
                            </div>
                        </div><!-- .post -->


                            <?php
                                $handle = fopen(the_slug() . "_list.htm", "r");
                                //$handle = fopen("test_list.htm", "r");

                                if ($handle) {
                                    $line = fgets($handle);
                                    while (($line) !== false) {
                                        print $line;
                                        $line = fgets($handle);
                                    }
                                } 

                                fclose($handle);
                            ?>

                            </tbody>
                        </table>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer() ?>
