    <style>
        .action-sec-video {
            position: relative;
            background-color: #fcda01eb;
            width: 100%;
            padding: 2rem 4rem;
            border-radius: 16px;
            overflow: hidden;
            max-width: 1100px;
            margin: auto;

            .play-icon {
                position: absolute;
                width: 64px;
                height: 64px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 999px;
                background-color: var(--q-secondary);
                color: #fff;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                box-shadow: 0px -4px 37px -9px rgba(0, 0, 0, 0.1);
                transition: ease all 0.3s;
            }

            .play-icon svg {
                width: 32px;
                height: 32px;
            }

            img {
                box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
                background-color: #fff;
                border-radius: 12px;
                overflow: hidden;
                margin: auto;
            }

            @media (min-width:1200px) {
                img {
                    max-width: 900px;
                }
            }

            &.no-bg {
                background-color: transparent;
                padding: 0;

                @media (min-width:1200px) {
                    img {
                        max-width: 100%;
                    }
                }
            }
        }
    </style>

    <?php
    $action_sec = get_field('see_in_action');
    $heading = $action_sec['title'] ?? "See in action";
    $showBg = $action_sec['show_background'];
    $img = $action_sec['image'];
    $ytUrl = $action_sec['url'];
    if ($img && $ytUrl):
    ?>
        <section class="section see-action">
            <div class="max-container">
                <div class="sec-heading">
                    <h2 style="max-width: 60rem"><?php echo $heading; ?></h2>
                    <p style="--max-w:54rem"><?php echo $desc; ?></p>
                </div>
                <div class="action-sec">
                    <div class="action-sec-video <?php echo !$showBg ? 'no-bg' : ''; ?>">
                        <a target="_blank" href="<?php echo $ytUrl; ?>" data-lity>
                            <?php if (!empty($img)): ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                            <?php endif; ?>
                            <span class="play-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>