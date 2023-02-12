<?php get_header(); ?>
<main id="container">
    <section id="section1">
        <div class="w-full h-96 bg-gradient-to-r from-pink-light to-pink-strong flex flex-col justify-center items-center">
            <h1 class="text-center text-6xl text-white font-nunito tracking-tight max-[700px]:text-3xl max-[430px]:text-xl">
                <?php
                $titleSection1 = get_field('title');
                if ($titleSection1) {
                    echo $titleSection1;
                }
                ?>
            </h1>
            <h2 class="text-center mt-4 text-2xl text-white max-[720px]:text-lg max-[530px]:text-base break-words">
                <?php
                    $subtitleSection1 = get_field('subtitle');
                    if ($subtitleSection1) {
                        echo $subtitleSection1;
                    }
                ?>
            </h2>
            <div class="flex flex-col md:flex-row">
                <a href="http://wpprojet3.local/fonctionnalites/" class="m-4 mt-12 text-pink-light bg-white py-3 px-16 rounded-full font-bold max-[950px]:p-auto">
                    <?php
                        $buttonText = get_field('buttontext');
                        if ($buttonText) {
                            echo $buttonText;
                        }
                    ?>
                </a>
                <a href="/contact" class="m-4 mt-2 md:mt-12 text-white border-2 border-white bg-pink-light py-3 px-10 rounded-full font-bold md:p-auto text-center">
                    <?php
                        $buttonContact = get_field('buttoncontact');
                        if ($buttonContact) {
                            echo $buttonContact;
                        }
                    ?>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-block-color" id="section2">
        <div class="flex flex-col items-start justify-center md:flex-row">
            <div class="mb-10 w-72 h-auto m-6 mt-10 p-4 bg-white" id="box1">
                <?php
                $image1 = get_field('image1');
                $size = 'section2ImageSize'; // (thumbnail, medium, large, full or custom size)
                if($image1) {
                    echo wp_get_attachment_image( $image1, $size, "", ['class' => "w-full rounded-md shadow-black"]);
                }
                ?>
                <h1 class="text-left mt-4 text-2xl font-bold max-w-half"><?php
                    $titleImage1Section2 = get_field('title_image1');
                    if ($titleImage1Section2) {
                        echo $titleImage1Section2;
                    }
                    ?>
                </h1>
                <hr class="mt-4 bg-sky-500 h-0.5 rounded-lg">
                <p class="mt-4 text-sm text-left font-semibold"><?php
                    $descriptionImage1Section2 = get_field('description_image1');
                    if ($descriptionImage1Section2) {
                        echo $descriptionImage1Section2;
                    }
                    ?></p>
            </div>
            <div class="mb-10 w-72 h-auto m-6 mt-10 p-4 bg-white" id="box2">
                <?php
                $image2 = get_field('image2');
                if($image2) {
                    echo wp_get_attachment_image( $image2, $size, "", ['class' => "w-full rounded-md shadow-black"]);
                }
                ?>
                <h1 class="mt-4 text-2xl font-bold max-w-half"><?php
                    $titleImage2Section2 = get_field('title_image2');
                    if ($titleImage2Section2) {
                        echo $titleImage1Section2;
                    }
                    ?>
                </h1>
                <hr class="mt-8 bg-line-gray h-0.5 rounded-lg">
                <p class="mt-4 text-sm text-left font-semibold break-words"><?php
                    $descriptionImage2Section2 = get_field('description_image2');
                    if ($descriptionImage2Section2) {
                        echo $descriptionImage2Section2;
                    }
                    ?>
                </p>
            </div>
            <div class="mb-10 w-72 h-auto m-6 mt-10 p-4 bg-white" id="box3">
                <?php
                $image3 = get_field('image3');
                if($image3) {
                    echo wp_get_attachment_image( $image3, $size, "", ['class' => "w-full rounded-md shadow-black"]);
                }
                ?>
                <h1 class="mt-4 text-2xl font-bold max-w-half"><?php
                    $titleImage3Section2 = get_field('title_image3');
                    if ($titleImage3Section2) {
                        echo $titleImage3Section2;
                    }
                    ?>
                </h1>
                <hr class="mt-4 bg-sky-500 h-0.5 rounded-lg">
                <p class="mt-4 text-sm text-left font-semibold break-words"><?php
                    $descriptionImage3Section2 = get_field('description_image3');
                    if ($descriptionImage3Section2) {
                        echo $descriptionImage3Section2;
                    }
                    ?>
                </p>
            </div>
        </div>
    </section>

    <section class="mt-2 flex flex-col items-center justify-center" id="section3">
        <h1 class="my-10 text-3xl font-nunito tracking-tight font-bold">
            <?php
            $titleSecteursSection3 = get_field('title_of_secteurs');
            if ($titleSecteursSection3) {
                echo $titleSecteursSection3;
            }
            ?>
        </h1>
        <div class="grid grid-cols-2 gap-0 max-[950px]:grid-cols-1">
            <?php while( have_rows('title_secteurs')): the_row();
            $image1 = get_sub_field('secteur_image1');

            if ($image1) {
                $size = "section3ImageSize";
                ?>
                <div class="w-auto h-auto max-[950px]:h-44">
                <?php echo wp_get_attachment_image($image1, $size); ?>
                </div>
                <?php } ?>

            <?php endwhile; ?>
        </div>
    </section>

    <section class="flex flex-col items-center justify-center bg-block-color" id="section4">
        <h1 class="my-10 mx-4 text-3xl font-nunito tracking-tight font-bold max-[950px]:text-xl">
            <?php
            $titleDispositifsSection4 = get_field('title_dispositifs');
            if ($titleDispositifsSection4) {
                echo $titleDispositifsSection4;
            }
            ?>
        </h1>
        <div class="flex flex-col bg-block-color md:flex-row">
            <div class="w-44 h-60 my-4 mx-10 bg-block-color max-[950px]:h-auto" id="boxDispositifs1">
                <?php
                $imageDispositif1 = get_field('image_dispositif1');
                $sizeSection4 = 'section4ImageSize'; // (thumbnail, medium, large, full or custom size)
                if($imageDispositif1) {
                    echo wp_get_attachment_image( $imageDispositif1, $sizeSection4);
                }
                ?>
                <p class="text-center pt-4 text-md max-[950px]:text-sm">
                    <?php
                    $textDispositif1 = get_field('text_dispositif1');
                    if ($textDispositif1) {
                        echo $textDispositif1;
                    }
                    ?>
                </p>
            </div>

            <div class="w-44 h-60 my-4 mx-10 bg-block-color max-[950px]:w-auto" id="boxDispositifs2">
                <?php
                $imageDispositif2 = get_field('image_dispositif2');
                if($imageDispositif2) {
                    echo wp_get_attachment_image( $imageDispositif2, $sizeSection4);
                }
                ?>
                <p class="text-center pt-4 text-md max-[950px]:text-sm">
                    <?php
                    $textDispositif2 = get_field('text_dispositif2');
                    if ($textDispositif2) {
                        echo $textDispositif2;
                    }
                    ?>
                </p>
            </div>

            <div class="w-44 h-60 my-4 mx-10 bg-block-color max-[950px]:w-auto" id="boxDispositifs3">
                <?php
                $imageDispositif3 = get_field('image_dispositif3');
                if($imageDispositif3) {
                    echo wp_get_attachment_image( $imageDispositif3, $sizeSection4);
                }
                ?>
                <p class="text-center pt-4 text-md max-[950px]:text-sm">
                    <?php
                    $textDispositif3 = get_field('text_dispositif3');
                    if ($textDispositif3) {
                        echo $textDispositif3;
                    }
                    ?>
                </p>
            </div>

            <div class="w-44 h-60 my-4 mx-10 bg-block-color max-[950px]:w-auto" id="boxDispositifs4">
                <?php
                $imageDispositif4 = get_field('image_dispositif4');
                if($imageDispositif4) {
                    echo wp_get_attachment_image( $imageDispositif4, $sizeSection4);
                }
                ?>
                <p class="text-center pt-4 text-md max-[950px]:text-sm">
                    <?php
                    $textDispositif4 = get_field('text_dispositif4');
                    if ($textDispositif4) {
                        echo $textDispositif4;
                    }
                    ?>
                </p>
            </div>
        </div>
    </section>

    <section class="mt-2 flex flex-col items-center justify-center" id="section5">
        <h1 class="mx-6 mb-10 mt-14 text-3xl font-nunito tracking-tight font-bold max-[950px]:text-xl">
            <?php
            $titleFonctionnalites = get_field('title_fonctionnalites');
            if ($titleFonctionnalites) {
                echo $titleFonctionnalites;
            }
            ?>
        </h1>
        <div class="w-full flex px-4 flex-col md:flex-row md:justify-center lg:px-0">
            <div class="mx-10 md:px-60 pb-8">
                <ul class="pb-8 pr-0 md:pr-24">
                    <li class="text-left m-2 mr-4 font-bold">
                        <?php
                        $fonctionnalite1 = get_field('fonctionnalite1');
                        if ($fonctionnalite1) {
                            echo $fonctionnalite1;
                        }
                        ?>
                    </li>
                    <li class="text-left m-2 mr-4 font-bold">
                        <?php
                        $fonctionnalite2 = get_field('fonctionnalite2');
                        if ($fonctionnalite2) {
                            echo $fonctionnalite2;
                        }
                        ?>
                    </li>
                    <li class="text-left m-2 mr-4 font-bold">
                        <?php
                        $fonctionnalite3 = get_field('fonctionnalite3');
                        if ($fonctionnalite3) {
                            echo $fonctionnalite3;
                        }
                        ?>
                    </li>
                    <li class="text-left m-2 mr-4 font-bold">
                        <?php
                        $fonctionnalite4 = get_field('fonctionnalite4');
                        if ($fonctionnalite4) {
                            echo $fonctionnalite4;
                        }
                        ?>
                    </li>
                </ul>
                <div class="text-center pr-32">
                    <a href="http://wpprojet3.local/fonctionnalites/" class="text-center text-white border-2 border-white bg-pink-light py-3 px-10 rounded-full font-bold">
                        <?php
                        if ($buttonText) {
                            echo $buttonText;
                        }
                        ?>
                    </a>
                </div>
            </div>
            <div class="mr-96">
                <?php
                $sizeSection5 = "section5ImageSize";
                $imageFonctionnalite = get_field('fonctionnalite_image');
                if($imageFonctionnalite) {
                    echo wp_get_attachment_image( $imageFonctionnalite, $sizeSection5);
                }
                ?>
            </div>
        </div>
    </section>

    <section class="pb-4 flex flex-col items-center justify-center" id="section6">
        <h1 class="m-6 mb-10 text-3xl font-nunito tracking-tight font-bold">
            <?php
            $titleReferences = get_field('title_references');
            if ($titleReferences) {
                echo $titleReferences;
            }
            ?>
        </h1>
        <div class="grid grid-cols-2 gap-2 max-[950px]:grid-cols-1">
            <?php
                // Check rows existexists.
                if( have_rows('references') ):
                    $sizeSection6 = "section6ImageSize";
                    // Loop through rows.
                    while( have_rows('references') ) : the_row();

                        // Load sub field value.
                        $reference_title = get_sub_field('reference_title');
                        $reference_image1 = get_sub_field('reference1_image1');
                        $reference_image2 = get_sub_field('reference1_image2');
                        $reference_image3 = get_sub_field('reference1_image3');

                        ?>
                        <div>
                            <h2 class="m-4 mx-14 text-xl text-right font-semibold"><?php echo $reference_title; ?></h2>
                        </div>
                        <div>
                            <div class="flex md:flex-row items-center justify-center flex-col">
                                <?php
                                echo wp_get_attachment_image( $reference_image1, $sizeSection6, "", ["class" => "mx-2","alt"=>"image"]);
                                echo wp_get_attachment_image( $reference_image2, $sizeSection6, "", ["class" => "mx-2","alt"=>"image"]);
                                echo wp_get_attachment_image( $reference_image3, $sizeSection6, "", ["class" => "mx-2","alt"=>"image"]);
                                ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                else :
                    echo "no data to show!";
                endif;
                ?>
        </div>
    </section>

    <section id="section7">
        <div class="flex flex-col justify-center items-center bg-block-color">
            <h1 class="m-2 mt-14 text-4xl font-nunito tracking-tight font-bold  max-[950px]:text-xl">
                <?php
                $titleHelp = get_field('title_help');
                if ($titleHelp) {
                    echo $titleHelp;
                }
                ?>
            </h1>
            <a href="/contact" class="mx-4 mt-6 mb-20 max-[950px]:p-4 text-white text-sm border-2 border-white bg-pink-light py-4 px-10 rounded-full font-bold">
                <?php
                $buttonContactUs = get_field('button_contactez_nous');
                if ($buttonContactUs) {
                    echo $buttonContactUs;
                }
                ?>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>