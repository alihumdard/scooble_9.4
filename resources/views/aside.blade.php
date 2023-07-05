<!------ Include the above in your HEAD tag ---------->
<style>
    [data-toggle="collapse"]:after {
        display: inline-block;
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        position: absolute;
        top: 20px;
        right: 10px;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        content: "\f054";
        transform: rotate(90deg);
        transition: all linear 0.25s;
        float: right;
    }

    [data-toggle="collapse"].collapsed:after {
        transform: rotate(0deg);
    }

    .aside_top a {
        text-decoration: none !important;
    }

    .aside_top {
        background-color: #fff;
        border-radius: 12px 12px 0px 0px !important;
    }

    .aside_bottom {
        background-color: #fff;
        border-radius: 0px 0px 12px 12px !important;
    }

    .aside_body {
        /*width: 318px !important;*/
        height: auto !important;
        background: #F7F7F7 !important;
    }
</style>
<div id="accordion" role="tablist">
    <div class="card" style="background: #FFFFFF;box-shadow: 0px 20px 50px rgba(220, 224, 249, 0.5);
		border-radius: 12px;">
        <div class="card-header aside_top" role="tab" id="headingOne">
            <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="d-flex flex-column">
                        <span class="mb-1" style="font-style: normal;font-weight: 700;font-size: 14px;line-height: 17px;letter-spacing: 0.01em;color: #323C47;">@lang('lang.trip_title')</span>
                        <span class="text-secondary text-small" style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;letter-spacing: 0.01em;color: #9FA2B4;">
                            23 December, 2023
                        </span>
                    </div>
                </a>
            </h5>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body p-2 aside_body">
                @lang('lang.trip_description')...
            </div>
        </div>
        <div class="card-header aside_bottom" role="tab" id="">
            <h5 class="mb-0">
                <a data-toggle="" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="d-flex flex-column">
                        <span class="mb-1" style="font-style: normal;font-weight: 700;font-size: 14px;line-height: 17px;letter-spacing: 0.01em;color: #323C47;">Lorem ipsum</span>
                        <span class="text-secondary text-small" style="font-style: normal;font-weight: 400;font-size: 14px;line-height: 17px;letter-spacing: 0.01em;color: #9FA2B4;">Admin</span>
                    </div>
                </a>
            </h5>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="" data-parent="">
        </div>
    </div>
</div>