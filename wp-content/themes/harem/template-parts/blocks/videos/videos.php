<?php
/**
 * Videos Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'white';
$supertitle = get_field('supertitle') ?: '';
$supertitle_style = get_field('supertitle_style') ?: 'primary';
$title = get_field('title') ?: '';
$section_header_color = get_field('section_header_color') ?: 'white';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'white';
$cta = get_field('cta') ?: [];
$videos = get_field('videos') ?: [];
$layout = get_field('layout') ?: 'slider';
$slides_to_show = get_field('slides_to_show') ?: '4';

$api_key = "AIzaSyAIQ0-cP-2UUkU6FXM6ac_joGJL4_5MnxM";
?>

<section class="section section--default section--<?= $background_color; ?>">
    <div class="container">
        <div class="section__header section__header--<?= $section_header_color; ?>">
            <?php if($supertitle) { ?>
            <div class="section__supertitle section__supertitle--<?= $supertitle_style; ?>">
                <?= $supertitle; ?>
            </div>
            <?php } ?>
            <?php if($title) { ?>
            <h2 class="section__title section__title">
                <?= $title; ?>
            </h2>
            <?php } ?>
            <?php if($text) { ?>
            <div class="section__text rich-text">
                <?= $text; ?>
            </div>
            <?php } ?>
        </div>
        <?php if($layout == 'playlist') { ?>
        <div class="videos videos--playlist">
            <div class="row">
                <div class="col-md-4">
                    <div class="videos__list-wrap">
                        <div class="videos__list">
                        <?php 
                            foreach($videos as $index => $video) {
                                $video_title_from_youtube = "";
                                $video_channel = "";
                                $apiUrl = 'https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id=' . $video['youtube_id'] . '&key=' . $api_key;
                                // Use file_get_contents to send a request to the API
                                $response = file_get_contents($apiUrl);
                                // Decode the JSON response
                                $data = json_decode($response, true);
                                
                                // Check if the video data is available
                                if (!empty($data['items'])) {
                                    // Get the video title from the snippet
                                    $video_title_from_youtube = $data['items'][0]['snippet']['title'];
                                    $video_channel = $data['items'][0]['snippet']['channelTitle'];


                                    $video_title_from_youtube = $data['items'][0]['snippet']['title'];
        
                                    // Get the channel name from the snippet
                                    $video_channel = $data['items'][0]['snippet']['channelTitle'];
                                    
                                    // Get the video length from contentDetails (ISO 8601 duration format)
                                    $duration = $data['items'][0]['contentDetails']['duration'];
                                    
                                    // Convert ISO 8601 duration to readable time
                                    $interval = new DateInterval($duration);
                                    $hours = $interval->h;
                                    $minutes = $interval->i;
                                    $seconds = $interval->s;

                                    // Format the duration into a human-readable string
                                    $formattedDuration = ($hours ? $hours . "h " : "") . ($minutes ? $minutes . "m " : "") . $seconds . "s";
                                }

                                $video_title = $video['title'] ? $video['title'] : $video_title_from_youtube;
                        ?>
                            <div class="videos__item videos__item--playlist js <?php if($index == 0) { echo "active"; } ?>" data-video-link=<?= $video['youtube_id']; ?>>
                                <div class="thumbnail">
                                    <img src="https://img.youtube.com/vi/<?= $video['youtube_id']; ?>/hqdefault.jpg" alt="">
                                    <div class="thumbnail__play">
                                        <i class="icon icon-play"></i>
                                    </div>
                                    <?php if($formattedDuration) { ?>
                                        <div class="thumbnail__duration"><?= $formattedDuration; ?></div>
                                    <?php } ?>
                                </div>
                                <div class="meta">
                                    <h3 class="title"><?= $video_title; ?></h3>
                                    <?php if($video_channel) { ?>
                                        <div class="channel"><?= $video_channel; ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="videos__stage">
                    <?php 
                        foreach($videos as $index => $video) {
                            $video_title_from_youtube = "";
                            $video_channel = "";
                            $apiUrl = 'https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id=' . $video['youtube_id'] . '&key=' . $api_key;
                            // Use file_get_contents to send a request to the API
                            $response = file_get_contents($apiUrl);
                            // Decode the JSON response
                            $data = json_decode($response, true);
                            
                            // Check if the video data is available
                            if (!empty($data['items'])) {
                                // Get the video title from the snippet
                                $video_title_from_youtube = $data['items'][0]['snippet']['title'];
                                $video_channel = $data['items'][0]['snippet']['channelTitle'];


                                $video_title_from_youtube = $data['items'][0]['snippet']['title'];
    
                                // Get the channel name from the snippet
                                $video_channel = $data['items'][0]['snippet']['channelTitle'];
                                
                                // Get the video length from contentDetails (ISO 8601 duration format)
                                $duration = $data['items'][0]['contentDetails']['duration'];
                                
                                // Convert ISO 8601 duration to readable time
                                $interval = new DateInterval($duration);
                                $hours = $interval->h;
                                $minutes = $interval->i;
                                $seconds = $interval->s;

                                // Format the duration into a human-readable string
                                $formattedDuration = ($hours ? $hours . "h " : "") . ($minutes ? $minutes . "m " : "") . $seconds . "s";
                            }

                            $video_title = $video['title'] ? $video['title'] : $video_title_from_youtube;

                            if($index == 0) {
                    ?>
                        <div class="videos__frame">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $video['youtube_id']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen data-video="<?= $video['youtube_id']; ?>"></iframe>
                        </div>
                        <div class="meta meta--frame">
                            <h3 class="title"><?= $video_title; ?></h3>
                            <?php if($video_channel) { ?>
                                <div class="channel"><?= $video_channel; ?></div>
                            <?php } ?>
                        </div>
                        <?php }
                    } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>
            <div class="videos videos--slider owl-carousel js" data-slideshow='<?= $slides_to_show; ?>'>
            <?php 
                foreach($videos as $index => $video) {
                    $video_title_from_youtube = "";
                    $video_channel = "";
                    $apiUrl = 'https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id=' . $video['youtube_id'] . '&key=' . $api_key;
                    // Use file_get_contents to send a request to the API
                    $response = file_get_contents($apiUrl);
                    // Decode the JSON response
                    $data = json_decode($response, true);
                    
                    // Check if the video data is available
                    if (!empty($data['items'])) {
                        // Get the video title from the snippet
                        $video_title_from_youtube = $data['items'][0]['snippet']['title'];
                        $video_channel = $data['items'][0]['snippet']['channelTitle'];


                        $video_title_from_youtube = $data['items'][0]['snippet']['title'];

                        // Get the channel name from the snippet
                        $video_channel = $data['items'][0]['snippet']['channelTitle'];
                        
                        // Get the video length from contentDetails (ISO 8601 duration format)
                        $duration = $data['items'][0]['contentDetails']['duration'];
                        
                        // Convert ISO 8601 duration to readable time
                        $interval = new DateInterval($duration);
                        $hours = $interval->h;
                        $minutes = $interval->i;
                        $seconds = $interval->s;

                        // Format the duration into a human-readable string
                        $formattedDuration = ($hours ? $hours . "h " : "") . ($minutes ? $minutes . "m " : "") . $seconds . "s";
                    }

                    $video_title = $video['title'] ? $video['title'] : $video_title_from_youtube;
            ?>
                <div class="videos__item js <?php if($index == 0) { echo "active"; } ?>" data-video-link=<?= $video['youtube_id']; ?>>
                    <div class="thumbnail">
                        <img src="https://img.youtube.com/vi/<?= $video['youtube_id']; ?>/hqdefault.jpg" alt="">
                        <div class="thumbnail__play">
                            <i class="icon icon-play"></i>
                        </div>
                        <?php if($formattedDuration) { ?>
                            <div class="thumbnail__duration"><?= $formattedDuration; ?></div>
                        <?php } ?>
                    </div>
                    <div class="meta">
                        <h3 class="title"><?= $video_title; ?></h3>
                        <?php if($video_channel) { ?>
                            <div class="channel"><?= $video_channel; ?></div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            </div>
        <?php } ?>


    </div>
    

    <?php if($cta) { ?>
    <div class="section__cta">
        <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
    </div>
    <?php } ?>
</section>