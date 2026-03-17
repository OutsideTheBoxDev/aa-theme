<style>
    .grid-lock-sec{
        background:var(--q-gray);
        margin-top:3rem;
        margin-bottom:2rem;

        .sec-heading{
            --q-sec-spacing:0rem;
            b{
                font-weight:600;
            }
        }
    }
    .grid-lock-items{
        width:100%;
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 2 columns */
        gap: 1.5rem;
        counter-reset: grid-counter;
        padding: 1rem;

        @media (max-width:600px) {
           grid-template-columns: repeat(1, 1fr); 
        }

        .grid-item {
            padding: 1.5rem;
            border-radius: 12px;
            position: relative;
            counter-increment: grid-counter;
            border: 1px solid #D2D3D5;

            h3{
                font-size: 1.25rem;
                color: #1D252C;
                margin-bottom:.625rem;
            }
            p{
                font-size:0.9rem;
            }
        }

        .grid-item::before {
            display:block;
            content: counter(grid-counter, decimal-leading-zero); /* 01, 02, ... */
            font-weight: bold;
            font-size: 1.25rem;
            color: #1D252C;
            opacity:0.5;
            margin-bottom:1.15rem;
        }
    }
</style>

<section class="section grid-lock-sec">
    <?php 
        $gridlock_sec = get_field('gridlock'); 
        $heading = $gridlock_sec['heading'] ?? "Outdated systems, manual workarounds, and disconnected processes are holding your equipment rental business back.";
        $desc = $gridlock_sec['desc'] ?? "We call this <b>Rental Gridlock</b>- the biggest operational threat to independent rental companies today. It's not your team. It's your tools. Rental Gridlock shows up in four major ways:";
        $items = array(
            array("title" => "Operational Gridlock", "desc" => "Deliveries, pickups, and customer check-ins take longer than they should. Disconnected processes and manual workflows slow your team down every day."),
            array("title" => "Silos Gridlock", "desc" => "Inventory, maintenance, and dispatch aren’t on the same page. When systems don’t sync, even small miscommunications lead to missed rentals and wasted time."),
            array("title" => "Visibility Gridlock", "desc" => "You can’t quickly answer key questions about utilization, revenue, or performance. Decisions are made on guesswork instead of data."),
            array("title" => "Mindset Gridlock", "desc" => "Sticking to familiar tools and outdated routines makes it harder to adapt, scale, or meet today’s customer expectations."),
        )
    ?>
    <div class="max-container">
        <div class="sec-heading" >
            <h2 style="max-width: 60rem"><?php echo $heading; ?></h2>
            <p style="--max-w:54rem"><?php echo $desc;?></p>
        </div>
    
        <div class="grid-lock-items">
            <?php
                foreach ($items as $item) {
                    echo '<div class="grid-item">';
                    echo "<h3>{$item['title']}</h3>";
                    echo "<p>{$item['desc']}</p>";
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</section>