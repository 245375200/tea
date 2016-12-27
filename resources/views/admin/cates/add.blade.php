@extends('admin.base.index')

@section('content')

<div class="main_container" id="forms_page" style="">

    <div class="row-fluid">
    </div>
    <div class="row-fluid" style="margin-top:80px;margin-left:-240px;width:1200px">
        <div class="widget widget-padding span12">
            <div class="widget-header">
                <i class="icon-list-alt"></i><h5>添加商品</h5>
                    <div class="widget-buttons">
                        <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
                    </div>
            </div>
            <div class="widget-body">
                <div class="widget-forms clearfix">
                    <form class="form-horizontal" action='{{ url("/admin/cates") }}' method="post" name='myform'>
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <div class="control-group">
                            <label class="control-label">商品名称</label>
                            <div class="controls">
                                <input name="Gname" class="span7"  type="text">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">商品价格</label>
                            <div class="controls">
                                <input name="Gpice" class="span7"  type="text">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"></label>
                                <div class="controls">
                                    <input name="Gpid" class="span7 pop" data-title="A popover for the input" data-content="Place some more information about the input here" type="hidden" value=0>
                                </div>
                             </div>
                        </div>
                        <!-- <div class="control-group">
                            <div class="controls"> -->
                          			<!-- <input type='hidden' name='_token' value='{{ csrf_token() }}'> -->
                          			<!-- <div style="margin-left:100px">
                          			  列表图片：<input type='file' name='Gpic'>
                          			</div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                            </div>
                        </div>
                        <!-- <div class="control-group">
                            <div class="controls"> -->
                          			<!-- <input type='hidden' name='_token' value='{{ csrf_token() }}'> -->
                          			<!-- <div style="margin-left:100px">
                          			  商品主图1：<input type='file' name='Gimage1'>
                          			</div>
                            </div>
                        </div> -->
                        <div class="control-group">
                          <div class="controles">
                            <input class="btn btn-primary" type="submit" style="width:350px;margin-left:260px;" value="添加">
                          </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                        function do(null){
                            if(confirm('信息不能为空')){
                                var form = document.myform;
                                form.submit()
                            }
                        }
                    </script>
                </div>
            </div>

        </div>
    </div>
    <div class="row-fluid">

    </div>
</div>
</div>
@stop
<!-- <div class="colorpicker dropdown-menu" style="display: block; top: 1228px; left: 630px;">
<div class="colorpicker-saturation" style="background-color: rgb(255, 0, 80);">
<i style="left: 42.7451px; top: 0px;">
<b></b>
</i>
</div>
<div class="colorpicker-hue">
<i style="top: 5.19878px;"></i>
</div>
<div class="colorpicker-alpha">
<i style="top: 0px;"></i>
</div>
<div class="colorpicker-color" style="display: none;">
<div></div>
</div>
</div>
<div class="colorpicker dropdown-menu">
<div class="colorpicker-saturation" style="background-color: rgb(255, 0, 80);">
<i style="left: 42.7451px; top: 0px;">
<b></b>
</i>
</div>
<div class="colorpicker-hue">
<i style="top: 5.19878px;"></i>
</div>
<div class="colorpicker-alpha">
<i style="top: 0px;"></i>
</div>
<div class="colorpicker-color" style="display: none;">
<div></div>
</div>
</div>
<div class="colorpicker dropdown-menu alpha">
<div class="colorpicker-saturation" style="background-color: rgb(255, 0, 80);">
<i style="left: 42.7451px; top: 0px;">
<b></b>
</i>
</div>
<div class="colorpicker-hue">
<i style="top: 5.19878px;"></i>
</div>
<div class="colorpicker-alpha" style="background-color: rgb(255, 146, 180);">
<i style="top: 0px;"></i>
</div>
<div class="colorpicker-color" style="display: none;">
<div></div>
</div>
</div>
<div class="colorpicker dropdown-menu">
<div class="colorpicker-saturation" style="background-color: rgb(255, 0, 80);">
<i style="left: 42.7451px; top: 0px;">
<b></b>
</i>
</div>
<div class="colorpicker-hue">
<i style="top: 5.19878px;"></i>
</div>
<div class="colorpicker-alpha">
<i style="top: 0px;"></i>
</div>
<div class="colorpicker-color" style="display: none;">
<div></div>
</div>
</div>
<div class="datepicker dropdown-menu" style="display: none; top: 1287px; left: 630px;">
<div class="datepicker-days" style="display: block;">
<table class=" table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">February 2012</th>
<th class="next">›</th>
</tr>
<tr>
<th class="dow">Su</th>
<th class="dow">Mo</th>
<th class="dow">Tu</th>
<th class="dow">We</th>
<th class="dow">Th</th>
<th class="dow">Fr</th>
<th class="dow">Sa</th>
</tr>
</thead>
<tbody>
<tr>
<td class="day old">29</td>
<td class="day old">30</td>
<td class="day old">31</td>
<td class="day">1</td>
<td class="day">2</td>
<td class="day">3</td>
<td class="day">4</td>
</tr>
<tr>
<td class="day">5</td>
<td class="day">6</td>
<td class="day">7</td>
<td class="day">8</td>
<td class="day">9</td>
<td class="day">10</td>
<td class="day">11</td>
</tr>
<tr>
<td class="day active">12</td>
<td class="day">13</td>
<td class="day">14</td>
<td class="day">15</td>
<td class="day">16</td>
<td class="day">17</td>
<td class="day">18</td>
</tr>
<tr>
<td class="day">19</td>
<td class="day">20</td>
<td class="day">21</td>
<td class="day">22</td>
<td class="day">23</td>
<td class="day">24</td>
<td class="day">25</td>
</tr>
<tr>
<td class="day">26</td>
<td class="day">27</td>
<td class="day">28</td>
<td class="day">29</td>
<td class="day new">1</td>
<td class="day new">2</td>
<td class="day new">3</td>
</tr>
<tr>
<td class="day new">4</td>
<td class="day new">5</td>
<td class="day new">6</td>
<td class="day new">7</td>
<td class="day new">8</td>
<td class="day new">9</td>
<td class="day new">10</td>
</tr>
</tbody>
</table>
</div>
<div class="datepicker-months" style="display: none;">
<table class="table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">2012</th>
<th class="next">›</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="month">Jan</span>
<span class="month active">Feb</span>
<span class="month">Mar</span>
<span class="month">Apr</span>
<span class="month">May</span>
<span class="month">Jun</span>
<span class="month">Jul</span>
<span class="month">Aug</span>
<span class="month">Sep</span>
<span class="month">Oct</span>
<span class="month">Nov</span>
<span class="month">Dec</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="datepicker-years" style="display: none;">
<table class="table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">2010-2019</th>
<th class="next">›</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="year old">2009</span>
<span class="year">2010</span>
<span class="year">2011</span>
<span class="year active">2012</span>
<span class="year">2013</span>
<span class="year">2014</span>
<span class="year">2015</span>
<span class="year">2016</span>
<span class="year">2017</span>
<span class="year">2018</span>
<span class="year">2019</span>
<span class="year old">2020</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="datepicker dropdown-menu">
<div class="datepicker-days" style="display: block;">
<table class=" table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">February 2012</th>
<th class="next">›</th>
</tr>
<tr>
<th class="dow">Su</th>
<th class="dow">Mo</th>
<th class="dow">Tu</th>
<th class="dow">We</th>
<th class="dow">Th</th>
<th class="dow">Fr</th>
<th class="dow">Sa</th>
</tr>
</thead>
<tbody>
<tr>
<td class="day old">29</td>
<td class="day old">30</td>
<td class="day old">31</td>
<td class="day">1</td>
<td class="day">2</td>
<td class="day">3</td>
<td class="day">4</td>
</tr>
<tr>
<td class="day">5</td>
<td class="day">6</td>
<td class="day">7</td>
<td class="day">8</td>
<td class="day">9</td>
<td class="day">10</td>
<td class="day">11</td>
</tr>
<tr>
<td class="day active">12</td>
<td class="day">13</td>
<td class="day">14</td>
<td class="day">15</td>
<td class="day">16</td>
<td class="day">17</td>
<td class="day">18</td>
</tr>
<tr>
<td class="day">19</td>
<td class="day">20</td>
<td class="day">21</td>
<td class="day">22</td>
<td class="day">23</td>
<td class="day">24</td>
<td class="day">25</td>
</tr>
<tr>
<td class="day">26</td>
<td class="day">27</td>
<td class="day">28</td>
<td class="day">29</td>
<td class="day new">1</td>
<td class="day new">2</td>
<td class="day new">3</td>
</tr>
<tr>
<td class="day new">4</td>
<td class="day new">5</td>
<td class="day new">6</td>
<td class="day new">7</td>
<td class="day new">8</td>
<td class="day new">9</td>
<td class="day new">10</td>
</tr>
</tbody>
</table>
</div>
<div class="datepicker-months" style="display: none;">
<table class="table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">2012</th>
<th class="next">›</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="month">Jan</span>
<span class="month active">Feb</span>
<span class="month">Mar</span>
<span class="month">Apr</span>
<span class="month">May</span>
<span class="month">Jun</span>
<span class="month">Jul</span>
<span class="month">Aug</span>
<span class="month">Sep</span>
<span class="month">Oct</span>
<span class="month">Nov</span>
<span class="month">Dec</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="datepicker-years" style="display: none;">
<table class="table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">2010-2019</th>
<th class="next">›</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="year old">2009</span>
<span class="year">2010</span>
<span class="year">2011</span>
<span class="year active">2012</span>
<span class="year">2013</span>
<span class="year">2014</span>
<span class="year">2015</span>
<span class="year">2016</span>
<span class="year">2017</span>
<span class="year">2018</span>
<span class="year">2019</span>
<span class="year old">2020</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="datepicker dropdown-menu">
<div class="datepicker-days" style="display: block;">
<table class=" table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">February 2012</th>
<th class="next">›</th>
</tr>
<tr>
<th class="dow">Su</th>
<th class="dow">Mo</th>
<th class="dow">Tu</th>
<th class="dow">We</th>
<th class="dow">Th</th>
<th class="dow">Fr</th>
<th class="dow">Sa</th>
</tr>
</thead>
<tbody>
<tr>
<td class="day old">29</td>
<td class="day old">30</td>
<td class="day old">31</td>
<td class="day">1</td>
<td class="day">2</td>
<td class="day">3</td>
<td class="day">4</td>
</tr>
<tr>
<td class="day">5</td>
<td class="day">6</td>
<td class="day">7</td>
<td class="day">8</td>
<td class="day">9</td>
<td class="day">10</td>
<td class="day">11</td>
</tr>
<tr>
<td class="day active">12</td>
<td class="day">13</td>
<td class="day">14</td>
<td class="day">15</td>
<td class="day">16</td>
<td class="day">17</td>
<td class="day">18</td>
</tr>
<tr>
<td class="day">19</td>
<td class="day">20</td>
<td class="day">21</td>
<td class="day">22</td>
<td class="day">23</td>
<td class="day">24</td>
<td class="day">25</td>
</tr>
<tr>
<td class="day">26</td>
<td class="day">27</td>
<td class="day">28</td>
<td class="day">29</td>
<td class="day new">1</td>
<td class="day new">2</td>
<td class="day new">3</td>
</tr>
<tr>
<td class="day new">4</td>
<td class="day new">5</td>
<td class="day new">6</td>
<td class="day new">7</td>
<td class="day new">8</td>
<td class="day new">9</td>
<td class="day new">10</td>
</tr>
</tbody>
</table>
</div>
<div class="datepicker-months" style="display: none;">
<table class="table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">2012</th>
<th class="next">›</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="month">Jan</span>
<span class="month active">Feb</span>
<span class="month">Mar</span>
<span class="month">Apr</span>
<span class="month">May</span>
<span class="month">Jun</span>
<span class="month">Jul</span>
<span class="month">Aug</span>
<span class="month">Sep</span>
<span class="month">Oct</span>
<span class="month">Nov</span>
<span class="month">Dec</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="datepicker-years" style="display: none;">
<table class="table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">2010-2019</th>
<th class="next">›</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="year old">2009</span>
<span class="year">2010</span>
<span class="year">2011</span>
<span class="year active">2012</span>
<span class="year">2013</span>
<span class="year">2014</span>
<span class="year">2015</span>
<span class="year">2016</span>
<span class="year">2017</span>
<span class="year">2018</span>
<span class="year">2019</span>
<span class="year old">2020</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="datepicker dropdown-menu">
<div class="datepicker-days" style="display: none;">
<table class=" table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">February 2012</th>
<th class="next">›</th>
</tr>
<tr>
<th class="dow">Su</th>
<th class="dow">Mo</th>
<th class="dow">Tu</th>
<th class="dow">We</th>
<th class="dow">Th</th>
<th class="dow">Fr</th>
<th class="dow">Sa</th>
</tr>
</thead>
<tbody>
<tr>
<td class="day old">29</td>
<td class="day old">30</td>
<td class="day old">31</td>
<td class="day">1</td>
<td class="day">2</td>
<td class="day">3</td>
<td class="day">4</td>
</tr>
<tr>
<td class="day">5</td>
<td class="day">6</td>
<td class="day">7</td>
<td class="day">8</td>
<td class="day">9</td>
<td class="day">10</td>
<td class="day">11</td>
</tr>
<tr>
<td class="day active">12</td>
<td class="day">13</td>
<td class="day">14</td>
<td class="day">15</td>
<td class="day">16</td>
<td class="day">17</td>
<td class="day">18</td>
</tr>
<tr>
<td class="day">19</td>
<td class="day">20</td>
<td class="day">21</td>
<td class="day">22</td>
<td class="day">23</td>
<td class="day">24</td>
<td class="day">25</td>
</tr>
<tr>
<td class="day">26</td>
<td class="day">27</td>
<td class="day">28</td>
<td class="day">29</td>
<td class="day new">1</td>
<td class="day new">2</td>
<td class="day new">3</td>
</tr>
<tr>
<td class="day new">4</td>
<td class="day new">5</td>
<td class="day new">6</td>
<td class="day new">7</td>
<td class="day new">8</td>
<td class="day new">9</td>
<td class="day new">10</td>
</tr>
</tbody>
</table>
</div>
<div class="datepicker-months" style="display: none;">
<table class="table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">2012</th>
<th class="next">›</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="month">Jan</span>
<span class="month active">Feb</span>
<span class="month">Mar</span>
<span class="month">Apr</span>
<span class="month">May</span>
<span class="month">Jun</span>
<span class="month">Jul</span>
<span class="month">Aug</span>
<span class="month">Sep</span>
<span class="month">Oct</span>
<span class="month">Nov</span>
<span class="month">Dec</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="datepicker-years" style="display: block;">
<table class="table-condensed">
<thead>
<tr>
<th class="prev">‹</th>
<th class="switch" colspan="5">2010-2019</th>
<th class="next">›</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<span class="year old">2009</span>
<span class="year">2010</span>
<span class="year">2011</span>
<span class="year active">2012</span>
<span class="year">2013</span>
<span class="year">2014</span>
<span class="year">2015</span>
<span class="year">2016</span>
<span class="year">2017</span>
<span class="year">2018</span>
<span class="year">2019</span>
<span class="year old">2020</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="bootstrap-timepicker dropdown-menu">
<table class=" show-meridian">
<tbody>
<tr>
<td>
<a href="#" data-action="incrementHour">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="incrementMinute">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td class="meridian-column">
<a href="#" data-action="toggleMeridian">
<i class="icon-chevron-up"></i>
</a>
</td>
</tr>
<tr>
<td>
<input class="bootstrap-timepicker-hour" name="hour" maxlength="2" type="text">
</td>
<td class="separator">:</td>
<td>
<input class="bootstrap-timepicker-minute" name="minute" maxlength="2" type="text">
</td>
<td class="separator"> </td>
<td>
<input class="bootstrap-timepicker-meridian" name="meridian" maxlength="2" type="text">
</td>
</tr>
<tr>
<td>
<a href="#" data-action="decrementHour">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"></td>
<td>
<a href="#" data-action="decrementMinute">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="toggleMeridian">
<i class="icon-chevron-down"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class="bootstrap-timepicker dropdown-menu">
<table class=" show-meridian">
<tbody>
<tr>
<td>
<a href="#" data-action="incrementHour">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="incrementMinute">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td class="meridian-column">
<a href="#" data-action="toggleMeridian">
<i class="icon-chevron-up"></i>
</a>
</td>
</tr>
<tr>
<td>
<input class="bootstrap-timepicker-hour" name="hour" maxlength="2" type="text">
</td>
<td class="separator">:</td>
<td>
<input class="bootstrap-timepicker-minute" name="minute" maxlength="2" type="text">
</td>
<td class="separator"> </td>
<td>
<input class="bootstrap-timepicker-meridian" name="meridian" maxlength="2" type="text">
</td>
</tr>
<tr>
<td>
<a href="#" data-action="decrementHour">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"></td>
<td>
<a href="#" data-action="decrementMinute">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="toggleMeridian">
<i class="icon-chevron-down"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class="bootstrap-timepicker dropdown-menu">
<table class=" ">
<tbody>
<tr>
<td>
<a href="#" data-action="incrementHour">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="incrementMinute">
<i class="icon-chevron-up"></i>
</a>
</td>
</tr>
<tr>
<td>
<input class="bootstrap-timepicker-hour" name="hour" maxlength="2" type="text">
</td>
<td class="separator">:</td>
<td>
<input class="bootstrap-timepicker-minute" name="minute" maxlength="2" type="text">
</td>
</tr>
<tr>
<td>
<a href="#" data-action="decrementHour">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"></td>
<td>
<a href="#" data-action="decrementMinute">
<i class="icon-chevron-down"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class="bootstrap-timepicker dropdown-menu">
<table class="show-seconds show-meridian">
<tbody>
<tr>
<td>
<a href="#" data-action="incrementHour">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="incrementMinute">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="incrementSecond">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td class="meridian-column">
<a href="#" data-action="toggleMeridian">
<i class="icon-chevron-up"></i>
</a>
</td>
</tr>
<tr>
<td>
<input class="bootstrap-timepicker-hour" name="hour" maxlength="2" type="text">
</td>
<td class="separator">:</td>
<td>
<input class="bootstrap-timepicker-minute" name="minute" maxlength="2" type="text">
</td>
<td class="separator">:</td>
<td>
<input class="bootstrap-timepicker-second" name="second" maxlength="2" type="text">
</td>
<td class="separator"> </td>
<td>
<input class="bootstrap-timepicker-meridian" name="meridian" maxlength="2" type="text">
</td>
</tr>
<tr>
<td>
<a href="#" data-action="decrementHour">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"></td>
<td>
<a href="#" data-action="decrementMinute">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="decrementSecond">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="toggleMeridian">
<i class="icon-chevron-down"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class="bootstrap-timepicker modal hide fade in" style="top: 30%; margin-top: 0; width: 200px; margin-left: -100px;" data-backdrop="true">
<div class="modal-header">
<a class="close" href="#" data-dismiss="modal">×</a>
<h3>Pick a Time</h3>
</div>
<div class="modal-content">
<table class=" show-meridian">
<tbody>
<tr>
<td>
<a href="#" data-action="incrementHour">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="incrementMinute">
<i class="icon-chevron-up"></i>
</a>
</td>
<td class="separator"> </td>
<td class="meridian-column">
<a href="#" data-action="toggleMeridian">
<i class="icon-chevron-up"></i>
</a>
</td>
</tr>
<tr>
<td>
<span class="bootstrap-timepicker-hour">9</span>
</td>
<td class="separator">:</td>
<td>
<span class="bootstrap-timepicker-minute">00</span>
</td>
<td class="separator"> </td>
<td>
<span class="bootstrap-timepicker-meridian">AM</span>
</td>
</tr>
<tr>
<td>
<a href="#" data-action="decrementHour">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"></td>
<td>
<a href="#" data-action="decrementMinute">
<i class="icon-chevron-down"></i>
</a>
</td>
<td class="separator"> </td>
<td>
<a href="#" data-action="toggleMeridian">
<i class="icon-chevron-down"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class="modal-footer">
<a class="btn btn-primary" href="#" data-dismiss="modal">Ok</a>
</div>
</div> -->
