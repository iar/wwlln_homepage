<?php
/*
Template Name: List (Two-Column)
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


                        <!-- The two column table -->
                        <table border="1">
                            <col style="width:30%">
                            <col style="width:60%">
                            <tbody>

                            <?php
                                $handle = fopen(the_slug() . "_list.htm", "r");
                                //$handle = fopen("test_list.htm", "r");

                                if ($handle) {
                                    $line = fgets($handle);
                                    while (($line) !== false) {
                                        print '<tr>'. PHP_EOL;
                                        print '<td>';
                                        print $line;
                                        print '</td>';
                                        $line = fgets($handle);
                                        print '<td>';
                                        print $line;
                                        print '</td>';
                                        print '</tr>'. PHP_EOL;
                                        $line = fgets($handle);
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
