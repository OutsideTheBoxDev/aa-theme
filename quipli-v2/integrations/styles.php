<style>
    .integrations-page {
        .sec-heading p{
            margin-bottom: 0px !important;
        }
        .page-heading {
            --q-page-spacing: 5.5rem;
        }
    }
    .qp-integrations-grid{
        --columns: 1;
        display: grid;
        grid-template-columns: repeat(var(--columns,3), 1fr);
        gap: 2rem
    }

	@media (min-width: 640px) {
        .qp-integrations-grid {
            --columns:2;
        }
    }

	@media (min-width: 1024px) {
        .qp-integrations-grid {
            --columns:3;
            gap: 2rem
        }
    }

    .qp-ig-block{
        display:flex;
        position:relative;
        flex-direction: column;
        justify-content: space-between;
        padding:1.5rem 1.5rem 1.25rem;
        border: 1px solid rgba(var(--q-secondary-rgb), 0.1);
        border-radius:16px;
        gap:2rem;


        a{
            display:flex;
            align-items: center;
            justify-content: center;
            background-color: var(--q-gray);
            color: var(--q-secondary);
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            line-height: 1;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;

            &:hover{
                background-color: var(--q-secondary);
                color: var(--q-white);
            }
        }
    }

    .qp-ig-content{
        display:flex;
        align-items: flex-start;
        flex-direction: column;
        gap: 1rem;

        img{
            width: auto;
            height: auto;
            max-height: 2rem;
        }
        p{
            font-size: 16px;
            line-height: 1.5;
        }
        b, strong{
            font-weight: 600;
        }
    }
    .integrations-page {
			.sec-heading p{
				margin-bottom: 0px !important;
			}
			.page-heading {
				--q-page-spacing: 5.5rem;
				> span{
					font-size: 14px;
					text-transform : uppercase;
					letter-spacing: 0.1em;
					font-weight: 400;
					display:inline-block;
					margin-bottom: 0.5rem;
					color: #A5A8AB;
					margin-top:-1rem;
				}
			}
			.qp-2col-block{
				display:flex;
				align-items:flex-start;
				justify-content:space-between;
				gap:4rem;
				.sec-heading{
					padding:0;
					flex-shrink:0;
					margin:0;
					max-width:40%;
				}
				h2{
					text-align:left;
				}
			}
			.qp-2col-info{
				flex-grow:1;
				max-width:650px;
				display:flex;
				flex-direction:column;

				p{
					font-size:18px;
					line-height:1.5;
					margin-bottom:1.5rem;

					a{
						text-decoration:underline;
					}
				}
			}
			.qp.how .how__wrap::after{
				display:none !important;
			}
		}
		.qp-integration-works.how__block{
			
			ul{
				flex-direction:column;
				justify-content:flex-start;
				gap:1rem;
				width:100%;
				max-width:100%;
				li{
					display:flex;
					align-items:center;
					gap:5rem;
					margin-bottom:1rem;
					&:last-child{
						margin-bottom:0;
					}

					> div{
						flex-grow:1;
						max-width:100%;
						display:flex;
						flex-direction:column;
						gap:0.5rem;

						h3{
							font-size:1.75rem;
							line-height:1;
							font-weight:500;
							margin-bottom:0.25rem;
						}
						p{
							font-size:16px !important; 
							line-height:1.5;
							margin-bottom:0.5rem;
							max-width:100% !important;
							font-weight:400 !important;
							max-width:750px !important;
						}
					}
				}
			}
		}
</style>