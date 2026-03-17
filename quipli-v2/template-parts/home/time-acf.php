<style>
    .time-block{
        position:relative;
        display:flex;
        align-items:center;
        justify-content:space-between;
        max-width:100%;
        background:var(--q-secondary);
        color:#fff;
        border-radius: .75rem;
        margin:auto;
        max-width: 68rem;
        padding:3.5rem 3rem;

        @media (max-width:900px) {
            padding:1.5rem 3rem;
            gap:4rem;
        }

        @media (max-width:640px) {
            flex-direction:column;
            gap:2rem;
            padding:3rem 1.5rem;
            text-align:center;
        }

        svg{
            position:absolute;
            pointer-events:none;
            width:200px;
            height:auto;

            &.pat-before{
                top:0;
                left:20%;
                transform: translateY(-60%);
            }

            &.pat-after{
                bottom:0;
                right:30%;
                width:150px;
                transform: translateY(60%);
            }


            @media (max-width:900px) {
                width:100px;
            }

        }

        .tm-content{
            flex-shrink:0;

            @media (max-width:640px) {
                flex-direction:column;
                align-items:center;
            }

            p{
                line-height:1.3;
                font-size:1rem;
                font-weight:400;
                &.num{
                    font-size:2.5rem;
                    font-weight:600;
                }
            }
        }
        .text{
            line-height:1.3;
            max-width: max(50%, 600px);
            font-weight:400;
            span{
                animation: 1.5s highlightprimary .5s 1 normal forwards;
                background-color: none;
                background: linear-gradient(90deg,rgba(var(--q-primary-rgb),.2) 50%,#fff0 50%);
                background-size: 200% 100%;
                background-position: 100% 0
            }
        }
    }
</style>
<section class="section time-info">
    <div class="max-container">
        <div class="sec-heading">
            <h2>Outdated rental software is slowing down the entire industry</h2>
        </div>
        <div class="time-block">
            <svg width="237" height="198" class="pat-before" viewBox="0 0 237 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M231.137 158.4H203.363C200.124 158.4 197.5 155.77 197.5 152.522V45.4782C197.5 42.2303 194.876 39.6 191.637 39.6H163.863C160.624 39.6 158 36.9697 158 33.7218V5.8782C158 2.6303 155.376 0 152.137 0H45.3634C42.1236 0 39.5 2.6303 39.5 5.8782V33.7218C39.5 36.9697 36.8764 39.6 33.6366 39.6H5.86339C2.62364 39.6 0 42.2303 0 45.4782V152.522C0 155.77 2.62364 158.4 5.86339 158.4H33.6366C36.8764 158.4 39.5 161.03 39.5 164.278V192.122C39.5 195.37 42.1236 198 45.3634 198H152.137C155.376 198 158 195.37 158 192.122V164.278C158 161.03 160.624 158.4 163.863 158.4H191.637C194.876 158.4 197.5 161.03 197.5 164.278V192.122C197.5 195.37 200.124 198 203.363 198H231.137C234.376 198 237 195.37 237 192.122V164.278C237 161.03 234.376 158.4 231.137 158.4ZM152.137 158.4H45.3634C42.1236 158.4 39.5 155.77 39.5 152.522V45.4782C39.5 42.2303 42.1236 39.6 45.3634 39.6H152.137C155.376 39.6 158 42.2303 158 45.4782V152.522C158 155.77 155.376 158.4 152.137 158.4Z" fill="white" fill-opacity="0.08"/>
            </svg>
            <div class="tm-content">
                <p class="num">67%</p>
                <p>of rental companies</p>
            </div>
            <p class="text">
                <span>waste time on tasks that modern equipment rental software could handle in seconds.</span> Quipli is the platform built to change that.
            </p>
            <svg width="237" height="198" class="pat-after" viewBox="0 0 237 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M231.137 158.4H203.363C200.124 158.4 197.5 155.77 197.5 152.522V45.4782C197.5 42.2303 194.876 39.6 191.637 39.6H163.863C160.624 39.6 158 36.9697 158 33.7218V5.8782C158 2.6303 155.376 0 152.137 0H45.3634C42.1236 0 39.5 2.6303 39.5 5.8782V33.7218C39.5 36.9697 36.8764 39.6 33.6366 39.6H5.86339C2.62364 39.6 0 42.2303 0 45.4782V152.522C0 155.77 2.62364 158.4 5.86339 158.4H33.6366C36.8764 158.4 39.5 161.03 39.5 164.278V192.122C39.5 195.37 42.1236 198 45.3634 198H152.137C155.376 198 158 195.37 158 192.122V164.278C158 161.03 160.624 158.4 163.863 158.4H191.637C194.876 158.4 197.5 161.03 197.5 164.278V192.122C197.5 195.37 200.124 198 203.363 198H231.137C234.376 198 237 195.37 237 192.122V164.278C237 161.03 234.376 158.4 231.137 158.4ZM152.137 158.4H45.3634C42.1236 158.4 39.5 155.77 39.5 152.522V45.4782C39.5 42.2303 42.1236 39.6 45.3634 39.6H152.137C155.376 39.6 158 42.2303 158 45.4782V152.522C158 155.77 155.376 158.4 152.137 158.4Z" fill="white" fill-opacity="0.08"/>
            </svg>
        </div>
    </div>
</section>