<style>
    .stock-indicator {
        z-index: 9999 !important;
        position: absolute;
        width: 100%;
        max-width: 450px;
        right: -375px;
        padding: 16px;
        bottom: 30px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px 0 0 100px;
        cursor: pointer;
        transition: right 0.5s ease-in-out;
    }

    .actived {
        z-index: 9999 !important;
        position: absolute;
        width: 100%;
        max-width: 450px;
        right: 0;
        padding: 16px 18px;
        bottom: 30px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px 0 0 100px;
        cursor: pointer;
        transition: right 0.5s ease-in-out;
    }

    .stock-index {
        font-size: 22px;
    }

    .chart-image {
        width: 36px;
        height: auto;
    }

    #ap-stock-marginprice,
    #ap-stock-percent {
        color: "#121212";
    }

    @media (max-width: 576px) {

        .stock-index span {
            font-size: 12px;
        }

        .stock-indicator {
            padding: 10px 12px;
            right: -370px;
            /* z-index: 9999 !important; */
            position: absolute;
            width: 100%;
            max-width: 450px;
            bottom: 100px;
            display: inline-block;
            justify-content: center;
            align-items: center;
            border-radius: 100px 0 0 100px;
            cursor: pointer;
            transition: right 0.5s ease-in-out;
        }

        .actived {
            /* z-index: 9999 !important; */
            position: absolute;
            width: 100%;
            right: 0;
            padding: 10px 12px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 100px 0 0 100px;
            cursor: pointer;
            max-width: 267px;
            bottom: 100px;
            transition: right 0.5s ease-in-out;
        }

        .stock-index {
            font-size: 20px;
        }
    }

    @media (max-width: 420px) {

        .stock-indicator {
            right: -360px;
            bottom: 100px;
        }

        .actived {
            right: 0;
            bottom: 100px;
        }
    }

    @media (max-width: 394px) {

        .stock-indicator {
            right: -340px;
            width: 100%;
        }

        .actived {
            right: 0;
        }
    }

    @media (max-width: 376px) {

        .stock-indicator {
            right: -320px;
        }

        .actived {
            right: 0;
        }
    }

    @media (max-width: 360px) {

        .stock-indicator {
            right: -305px;
        }

        .actived {
            right: 0;
        }
    }

    @media (max-width: 320px) {

        .stock-indicator {
            right: -265px;
            bottom: 220px;
        }

        .actived {
            right: 0;
            bottom: 220px;
        }
    }
</style>

<div id="ap-stock-indicator" class="stock-indicator actived bg-white shadow">
    <div class="stock-index d-flex align-items-center gap-2" status="true">
        <div class="chart-logo" onclick="handleShow()">
            <img src="{{ asset('assets/images/webp/chart.png') }}" class="chart-image" alt="chart">
        </div>
        <div class="lh-1">
            <span class="ms-2 fw-light">PT Autopedia Sukses Lestari Tbk</span>
            <span class="common-bold">(ASLC)</span>

            <div class="px-2 pb-1 common-bold">
                <span id="ap-stock-price">0</span>
                <span id="ap-stock-marginprice">0</span>
                <span>|</span>
                <span id="ap-stock-percent">(0)</span>
            </div>

            <div class="px-2">
                <a class="text-decoration-none common-bold" href="{{URL::to('/transparansi/analisa-saham')}}"
                    target="_self" rel="noopener noreferrer">
                    <span class="d-flex align-items-center">
                        {{__("Selengkapnya")}}
                        <i class="fa-solid fa-caret-right mx-1"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>


</div>