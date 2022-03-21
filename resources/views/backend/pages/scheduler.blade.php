@extends('backend.layouts.master')

@push('stylesheet')
    <style type="text/css">
        .dhx_cal_ltext.my_editor {
            position: relative;
            top: -2px;
        }

        .dhx_cal_ltext.my_editor {
            line-height: 40px;
        }

        .dhx_cal_ltext.my_editor input {
            width: 271px;
            padding-left: 8px;
            box-sizing: border-box;
            height: 33px;
            text-overflow: ellipsis;
        }

        .dhx_cal_ltext.my_editor input:first-child {
            margin: 0 0 0 20px;
            border-bottom: 0;
        }
    </style>
@endpush

@section('content')
   

    <!--end::Aside-->
    <!--begin::Wrapper-->
    <div class="flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Content-->
        <div style='float: left; padding:10px;'>
            <div id="cal_here" style='width:250px;'></div>
            <input type="text" class="form-control">
        </div>
        <div id="scheduler_here" class="dhx_cal_container" style='width:auto; height:100%;'>
            <div class="dhx_cal_navline">
                <div class="dhx_cal_prev_button">&nbsp;</div>
                <div class="dhx_cal_next_button">&nbsp;</div>
                <div class="dhx_cal_today_button"></div>
                <div class="dhx_cal_date"></div>
                <div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
                <div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
                <div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
            </div>
            <div class="dhx_cal_header">
            </div>
            <div class="dhx_cal_data">
            </div>
        </div>



        <!--end::Content-->
        <!--begin::Footer-->
        <!--end::Footer-->
    </div>
@endsection

@push('scripts')
    <script>
        var prev = null;
        var curr = null;
        var next = null;
        window.addEventListener("DOMContentLoaded", function(){
            scheduler.init('scheduler_here',new Date(2021,6,11),"week");
            scheduler.config.details_on_create=true;
            scheduler.config.details_on_dblclick=true;


            scheduler.locale.labels.section_selectme = "Size of the pizza?";


            var pizza_size = [
                { key: 1, label: 'Small' },
                { key: 2, label: 'Medium' },
                { key: 3, label: 'Large' }
            ];

            scheduler.config.lightbox.sections=[
                { name:"description", height:50, map_to:"text", type:"textarea", focus:true },
                { name:"selectme", height: 110, options: pizza_size, map_to:"radiobutton_option", type:"radio", vertical: true },
                { name:"time", height:72, type:"time", map_to:"auto"}

            ];
            scheduler.load("assets/codebase/events.json");
            var calendar = scheduler.renderCalendar({
                container:"cal_here",
                navigation:true,
                handler:function(date){
                    scheduler.setCurrentView(date, scheduler.getState().mode);
                }
            });
            scheduler.linkCalendar(calendar);
        });
    </script>
@endpush
