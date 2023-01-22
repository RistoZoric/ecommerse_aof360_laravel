@extends('backend.layouts.master')
@section('title','E-SHOP || DASHBOARD')
@section('main-content')
<div class="container-fluid">
    @include('backend.layouts.notification')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
    </div>


    <div class="row">
    <div class="col-lg-6">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
          <div class="card gradient-purple-love">
            <div class="card-content">
              <div class="card-body py-0">
                <div class="media pb-1">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 white mb-0">{{\App\Models\Category::countActiveCategory()}}</h3>
                    <span>Category</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="ft-activity font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                  <g class="ct-grids">
                    <line x1="10" x2="10" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="40.52777777777778" x2="40.52777777777778" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="71.05555555555556" x2="71.05555555555556" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="101.58333333333334" x2="101.58333333333334" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="132.11111111111111" x2="132.11111111111111" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="162.63888888888889" x2="162.63888888888889" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="193.16666666666669" x2="193.16666666666669" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="223.69444444444446" x2="223.69444444444446" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="254.22222222222223" x2="254.22222222222223" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="284.75" x2="284.75" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                  </g>
                  <g>
                    <g class="ct-series ct-series-a">
                      <path d="M10,51.667C40.528,60.833,40.528,60.833,40.528,60.833C71.056,33.333,71.056,33.333,71.056,33.333C101.583,42.5,101.583,42.5,101.583,42.5C132.111,15,132.111,15,132.111,15C162.639,42.5,162.639,42.5,162.639,42.5C193.167,33.333,193.167,33.333,193.167,33.333C223.694,42.5,223.694,42.5,223.694,42.5C254.222,24.167,254.222,24.167,254.222,24.167C284.75,38.833,284.75,38.833,284.75,38.833" class="ct-line"></path>
                      <line x1="10" y1="51.66666666666667" x2="10.01" y2="51.66666666666667" class="ct-point" ct:value="50"></line>
                      <line x1="40.52777777777778" y1="60.833333333333336" x2="40.53777777777778" y2="60.833333333333336" class="ct-point" ct:value="45"></line>
                      <line x1="71.05555555555556" y1="33.333333333333336" x2="71.06555555555556" y2="33.333333333333336" class="ct-point" ct:value="60"></line>
                      <line x1="101.58333333333334" y1="42.5" x2="101.59333333333335" y2="42.5" class="ct-point" ct:value="55"></line>
                      <line x1="132.11111111111111" y1="15" x2="132.1211111111111" y2="15" class="ct-point" ct:value="70"></line>
                      <line x1="162.63888888888889" y1="42.5" x2="162.64888888888888" y2="42.5" class="ct-point" ct:value="55"></line>
                      <line x1="193.16666666666669" y1="33.333333333333336" x2="193.17666666666668" y2="33.333333333333336" class="ct-point" ct:value="60"></line>
                      <line x1="223.69444444444446" y1="42.5" x2="223.70444444444445" y2="42.5" class="ct-point" ct:value="55"></line>
                      <line x1="254.22222222222223" y1="24.166666666666664" x2="254.23222222222222" y2="24.166666666666664" class="ct-point" ct:value="65"></line>
                      <line x1="284.75" y1="38.83333333333333" x2="284.76" y2="38.83333333333333" class="ct-point" ct:value="57"></line>
                    </g>
                  </g>
                  <g class="ct-labels"></g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
          <div class="card gradient-king-yna">
            <div class="card-content">
              <div class="card-body py-0">
                <div class="media pb-1">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 white mb-0">{{\App\Models\Product::countActiveProduct()}}</h3>
                    <span>products</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="ft-activity font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                  <g class="ct-grids">
                    <line x1="10" x2="10" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="40.52777777777778" x2="40.52777777777778" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="71.05555555555556" x2="71.05555555555556" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="101.58333333333334" x2="101.58333333333334" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="132.11111111111111" x2="132.11111111111111" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="162.63888888888889" x2="162.63888888888889" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="193.16666666666669" x2="193.16666666666669" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="223.69444444444446" x2="223.69444444444446" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="254.22222222222223" x2="254.22222222222223" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="284.75" x2="284.75" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                  </g>
                  <g>
                    <g class="ct-series ct-series-a">
                      <path d="M10,15C40.528,42.5,40.528,42.5,40.528,42.5C71.056,28.75,71.056,28.75,71.056,28.75C101.583,56.25,101.583,56.25,101.583,56.25C132.111,42.5,132.111,42.5,132.111,42.5C162.639,52.125,162.639,52.125,162.639,52.125C193.167,27.375,193.167,27.375,193.167,27.375C223.694,59,223.694,59,223.694,59C254.222,35.625,254.222,35.625,254.222,35.625C284.75,42.5,284.75,42.5,284.75,42.5" class="ct-line"></path>
                      <line x1="10" y1="15" x2="10.01" y2="15" class="ct-point" ct:value="80"></line>
                      <line x1="40.52777777777778" y1="42.5" x2="40.53777777777778" y2="42.5" class="ct-point" ct:value="60"></line>
                      <line x1="71.05555555555556" y1="28.75" x2="71.06555555555556" y2="28.75" class="ct-point" ct:value="70"></line>
                      <line x1="101.58333333333334" y1="56.25" x2="101.59333333333335" y2="56.25" class="ct-point" ct:value="50"></line>
                      <line x1="132.11111111111111" y1="42.5" x2="132.1211111111111" y2="42.5" class="ct-point" ct:value="60"></line>
                      <line x1="162.63888888888889" y1="52.125" x2="162.64888888888888" y2="52.125" class="ct-point" ct:value="53"></line>
                      <line x1="193.16666666666669" y1="27.375" x2="193.17666666666668" y2="27.375" class="ct-point" ct:value="71"></line>
                      <line x1="223.69444444444446" y1="59" x2="223.70444444444445" y2="59" class="ct-point" ct:value="48"></line>
                      <line x1="254.22222222222223" y1="35.625" x2="254.23222222222222" y2="35.625" class="ct-point" ct:value="65"></line>
                      <line x1="284.75" y1="42.5" x2="284.76" y2="42.5" class="ct-point" ct:value="60"></line>
                    </g>
                  </g>
                  <g class="ct-labels"></g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
          <div class="card gradient-ibiza-sunset">
            <div class="card-content">
              <div class="card-body py-0">
                <div class="media pb-1">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 white mb-0">{{\App\Models\Order::countActiveOrder()}}</h3>



                    <span>Order</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="ft-percent font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                  <g class="ct-grids">
                    <line x1="10" x2="10" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="40.52777777777778" x2="40.52777777777778" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="71.05555555555556" x2="71.05555555555556" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="101.58333333333334" x2="101.58333333333334" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="132.11111111111111" x2="132.11111111111111" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="162.63888888888889" x2="162.63888888888889" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="193.16666666666669" x2="193.16666666666669" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="223.69444444444446" x2="223.69444444444446" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="254.22222222222223" x2="254.22222222222223" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="284.75" x2="284.75" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                  </g>
                  <g>
                    <g class="ct-series ct-series-a">
                      <path d="M10,60.833C40.528,42.5,40.528,42.5,40.528,42.5C71.056,49.833,71.056,49.833,71.056,49.833C101.583,24.167,101.583,24.167,101.583,24.167C132.111,51.667,132.111,51.667,132.111,51.667C162.639,29.667,162.639,29.667,162.639,29.667C193.167,37,193.167,37,193.167,37C223.694,15,223.694,15,223.694,15C254.222,55.333,254.222,55.333,254.222,55.333C284.75,38.833,284.75,38.833,284.75,38.833" class="ct-line"></path>
                      <line x1="10" y1="60.833333333333336" x2="10.01" y2="60.833333333333336" class="ct-point" ct:value="45"></line>
                      <line x1="40.52777777777778" y1="42.5" x2="40.53777777777778" y2="42.5" class="ct-point" ct:value="55"></line>
                      <line x1="71.05555555555556" y1="49.83333333333333" x2="71.06555555555556" y2="49.83333333333333" class="ct-point" ct:value="51"></line>
                      <line x1="101.58333333333334" y1="24.166666666666664" x2="101.59333333333335" y2="24.166666666666664" class="ct-point" ct:value="65"></line>
                      <line x1="132.11111111111111" y1="51.66666666666667" x2="132.1211111111111" y2="51.66666666666667" class="ct-point" ct:value="50"></line>
                      <line x1="162.63888888888889" y1="29.666666666666664" x2="162.64888888888888" y2="29.666666666666664" class="ct-point" ct:value="62"></line>
                      <line x1="193.16666666666669" y1="37" x2="193.17666666666668" y2="37" class="ct-point" ct:value="58"></line>
                      <line x1="223.69444444444446" y1="15" x2="223.70444444444445" y2="15" class="ct-point" ct:value="70"></line>
                      <line x1="254.22222222222223" y1="55.333333333333336" x2="254.23222222222222" y2="55.333333333333336" class="ct-point" ct:value="48"></line>
                      <line x1="284.75" y1="38.83333333333333" x2="284.76" y2="38.83333333333333" class="ct-point" ct:value="57"></line>
                    </g>
                  </g>
                  <g class="ct-labels"></g>
                </svg>
              </div>

            </div>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
          <div class="card gradient-mint">
            <div class="card-content">
              <div class="card-body py-0">
                <div class="media pb-1">
                  <div class="media-body white text-left">
                    <h3 class="font-large-1 white mb-0"> {{\App\Models\Post::countActivePost()}}</h3>
                    <span>Post</span>
                  </div>
                  <div class="media-right white text-right">
                    <i class="ft-trending-up font-large-1"></i>
                  </div>
                </div>
              </div>
              <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                  <g class="ct-grids">
                    <line x1="10" x2="10" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="40.52777777777778" x2="40.52777777777778" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="71.05555555555556" x2="71.05555555555556" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="101.58333333333334" x2="101.58333333333334" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="132.11111111111111" x2="132.11111111111111" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="162.63888888888889" x2="162.63888888888889" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="193.16666666666669" x2="193.16666666666669" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="223.69444444444446" x2="223.69444444444446" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="254.22222222222223" x2="254.22222222222223" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                    <line x1="284.75" x2="284.75" y1="15" y2="70" class="ct-grid ct-horizontal"></line>
                  </g>
                  <g>
                    <g class="ct-series ct-series-a">
                      <path d="M10,37C40.528,53.5,40.528,53.5,40.528,53.5C71.056,15,71.056,15,71.056,15C101.583,60.1,101.583,60.1,101.583,60.1C132.111,42.5,132.111,42.5,132.111,42.5C162.639,48,162.639,48,162.639,48C193.167,28.2,193.167,28.2,193.167,28.2C223.694,53.5,223.694,53.5,223.694,53.5C254.222,26,254.222,26,254.222,26C284.75,39.2,284.75,39.2,284.75,39.2" class="ct-line"></path>
                      <line x1="10" y1="37" x2="10.01" y2="37" class="ct-point" ct:value="70"></line>
                      <line x1="40.52777777777778" y1="53.5" x2="40.53777777777778" y2="53.5" class="ct-point" ct:value="55"></line>
                      <line x1="71.05555555555556" y1="15" x2="71.06555555555556" y2="15" class="ct-point" ct:value="90"></line>
                      <line x1="101.58333333333334" y1="60.1" x2="101.59333333333335" y2="60.1" class="ct-point" ct:value="49"></line>
                      <line x1="132.11111111111111" y1="42.5" x2="132.1211111111111" y2="42.5" class="ct-point" ct:value="65"></line>
                      <line x1="162.63888888888889" y1="48" x2="162.64888888888888" y2="48" class="ct-point" ct:value="60"></line>
                      <line x1="193.16666666666669" y1="28.200000000000003" x2="193.17666666666668" y2="28.200000000000003" class="ct-point" ct:value="78"></line>
                      <line x1="223.69444444444446" y1="53.5" x2="223.70444444444445" y2="53.5" class="ct-point" ct:value="55"></line>
                      <line x1="254.22222222222223" y1="26" x2="254.23222222222222" y2="26" class="ct-point" ct:value="80"></line>
                      <line x1="284.75" y1="39.2" x2="284.76" y2="39.2" class="ct-point" ct:value="68"></line>
                    </g>
                  </g>
                  <g class="ct-labels"></g>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="col-xl-12 col-12">
        <div class="card" style="height: 489.969px;">
          <div class="card-header">
            <h4 class="card-title">Project Stats</h4>
          </div>
          <div class="card-content">

            <p class="font-medium-2 text-center mb-0 mt-2">Project Tasks</p>
            <div id="donut-dashboard-chart" class="height-250 donut">
              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;">
                <g ct:series-name="done" class="ct-series ct-done">
                  <path d="M294.118,113.72A90,90,0,0,0,204.828,35" class="ct-slice-donut" ct:value="23" style="stroke-width: 60px;"></path>
                </g>
                <g ct:series-name="progress" class="ct-series ct-progress">
                  <path d="M270.435,186.609A90,90,0,0,0,294.079,113.408" class="ct-slice-donut" ct:value="14" style="stroke-width: 60px;"></path>
                </g>
                <g ct:series-name="outstanding" class="ct-series ct-outstanding">
                  <path d="M116.422,141.864A90,90,0,0,0,270.65,186.38" class="ct-slice-donut" ct:value="35" style="stroke-width: 60px;"></path>
                </g>
                <g ct:series-name="started" class="ct-series ct-started">
                  <path d="M204.828,35A90,90,0,0,0,116.482,142.173" class="ct-slice-donut" ct:value="28" style="stroke-width: 60px;"></path>
                </g>
                <g><text dx="204.828125" dy="125" text-anchor="middle" class="ct-label">100%</text></g>
              </svg>
            </div>

            <div class="card-body">
              <div class="row mb-3">
                <div class="col">
                  <span class="mb-1  d-block">23% - Started</span>
                  <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col">
                  <span class="mb-1  d-block">28% - Done</span>
                  <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <span class="mb-1  d-block">35% - Remaining</span>
                  <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col">
                  <span class="mb-1  d-block">14% - In Progress</span>
                  <div class="progress" style="height: 5px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">PRODUCTS SALES</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div class="chart-info mb-3 ml-3">
                  <span class="gradient-purple-bliss d-inline-block rounded-circle mr-1" style="width:15px; height:15px;"></span>
                  Sales
                  <span class="gradient-mint d-inline-block rounded-circle mr-1 ml-2" style="width:15px; height:15px;"></span>
                  Visits
                </div>
                <div id="line-area" class="height-350 lineArea">
                  <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                    <g class="ct-grids">
                      <line y1="315" y2="315" x1="50" x2="1229" class="ct-grid ct-vertical"></line>
                      <line y1="255" y2="255" x1="50" x2="1229" class="ct-grid ct-vertical"></line>
                      <line y1="195" y2="195" x1="50" x2="1229" class="ct-grid ct-vertical"></line>
                      <line y1="135" y2="135" x1="50" x2="1229" class="ct-grid ct-vertical"></line>
                      <line y1="75" y2="75" x1="50" x2="1229" class="ct-grid ct-vertical"></line>
                      <line y1="15" y2="15" x1="50" x2="1229" class="ct-grid ct-vertical"></line>
                    </g>
                    <g>
                      <g class="ct-series ct-series-a">
                        <path d="M50,315L50,315C106.143,275,162.286,195,218.429,195C274.571,195,330.714,255,386.857,255C443,255,499.143,45,555.286,45C611.429,45,667.571,195,723.714,195C779.857,195,836,99,892.143,99C948.286,99,1004.429,154,1060.571,189C1116.714,224,1172.857,273,1229,315L1229,315Z" class="ct-area"></path>
                        <path d="M50,315C106.143,275,162.286,195,218.429,195C274.571,195,330.714,255,386.857,255C443,255,499.143,45,555.286,45C611.429,45,667.571,195,723.714,195C779.857,195,836,99,892.143,99C948.286,99,1004.429,154,1060.571,189C1116.714,224,1172.857,273,1229,315" class="ct-line"></path>
                        <line x1="50" y1="315" x2="50.01" y2="315" class="ct-point" ct:value="0"></line>
                        <line x1="218.42857142857142" y1="195" x2="218.4385714285714" y2="195" class="ct-point" ct:value="20"></line>
                        <line x1="386.85714285714283" y1="255" x2="386.8671428571428" y2="255" class="ct-point" ct:value="10"></line>
                        <line x1="555.2857142857142" y1="45" x2="555.2957142857142" y2="45" class="ct-point" ct:value="45"></line>
                        <line x1="723.7142857142857" y1="195" x2="723.7242857142857" y2="195" class="ct-point" ct:value="20"></line>
                        <line x1="892.1428571428571" y1="99" x2="892.1528571428571" y2="99" class="ct-point" ct:value="36"></line>
                        <line x1="1060.5714285714284" y1="189" x2="1060.5814285714284" y2="189" class="ct-point" ct:value="21"></line>
                        <line x1="1229" y1="315" x2="1229.01" y2="315" class="ct-point" ct:value="0"></line>
                      </g>
                      <g class="ct-series ct-series-b">
                        <path d="M50,315L50,315C106.143,305,162.286,300.455,218.429,285C274.571,269.545,330.714,183,386.857,183C443,183,499.143,231,555.286,231C611.429,231,667.571,123,723.714,123C779.857,123,836,243,892.143,243C948.286,243,1004.429,147,1060.571,147C1116.714,147,1172.857,259,1229,315L1229,315Z" class="ct-area"></path>
                        <path d="M50,315C106.143,305,162.286,300.455,218.429,285C274.571,269.545,330.714,183,386.857,183C443,183,499.143,231,555.286,231C611.429,231,667.571,123,723.714,123C779.857,123,836,243,892.143,243C948.286,243,1004.429,147,1060.571,147C1116.714,147,1172.857,259,1229,315" class="ct-line"></path>
                        <line x1="50" y1="315" x2="50.01" y2="315" class="ct-point" ct:value="0"></line>
                        <line x1="218.42857142857142" y1="285" x2="218.4385714285714" y2="285" class="ct-point" ct:value="5"></line>
                        <line x1="386.85714285714283" y1="183" x2="386.8671428571428" y2="183" class="ct-point" ct:value="22"></line>
                        <line x1="555.2857142857142" y1="231" x2="555.2957142857142" y2="231" class="ct-point" ct:value="14"></line>
                        <line x1="723.7142857142857" y1="123" x2="723.7242857142857" y2="123" class="ct-point" ct:value="32"></line>
                        <line x1="892.1428571428571" y1="243" x2="892.1528571428571" y2="243" class="ct-point" ct:value="12"></line>
                        <line x1="1060.5714285714284" y1="147" x2="1060.5814285714284" y2="147" class="ct-point" ct:value="28"></line>
                        <line x1="1229" y1="315" x2="1229.01" y2="315" class="ct-point" ct:value="0"></line>
                      </g>
                    </g>
                    <g class="ct-labels">
                      <foreignObject style="overflow: visible;" x="50" y="320" width="168.42857142857142" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 168px; height: 20px;">1</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="218.42857142857142" y="320" width="168.42857142857142" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 168px; height: 20px;">2</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="386.85714285714283" y="320" width="168.4285714285714" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 168px; height: 20px;">3</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="555.2857142857142" y="320" width="168.42857142857144" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 168px; height: 20px;">4</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="723.7142857142857" y="320" width="168.42857142857144" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 168px; height: 20px;">5</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="892.1428571428571" y="320" width="168.42857142857133" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 168px; height: 20px;">6</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="1060.5714285714284" y="320" width="168.42857142857156" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 168px; height: 20px;">7</span></foreignObject>
                      <foreignObject style="overflow: visible;" x="1229" y="320" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">8</span></foreignObject>
                      <foreignObject style="overflow: visible;" y="255" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">0</span></foreignObject>
                      <foreignObject style="overflow: visible;" y="195" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">10</span></foreignObject>
                      <foreignObject style="overflow: visible;" y="135" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">20</span></foreignObject>
                      <foreignObject style="overflow: visible;" y="75" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">30</span></foreignObject>
                      <foreignObject style="overflow: visible;" y="15" x="10" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">40</span></foreignObject>
                      <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject>
                    </g>
                    <defs>
                      <linearGradient id="gradient" x1="0" y1="1" x2="1" y2="0">
                        <stop offset="0" stop-color="rgba(0, 201, 255, 1)"></stop>
                        <stop offset="1" stop-color="rgba(146, 254, 157, 1)"></stop>
                      </linearGradient>
                      <linearGradient id="gradient1" x1="0" y1="1" x2="1" y2="0">
                        <stop offset="0" stop-color="rgba(132, 60, 247, 1)"></stop>
                        <stop offset="1" stop-color="rgba(56, 184, 242, 1)"></stop>
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  </div>
@endsection

@push('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
{{-- pie chart --}}
<script type="text/javascript">
  var analytics = <?php echo $users; ?>

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart()
  {
      var data = google.visualization.arrayToDataTable(analytics);
      var options = {
          title : 'Last 7 Days registered user'
      };
      var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
      chart.draw(data, options);
  }
</script>
  {{-- line chart --}}
  <script type="text/javascript">
    const url = "{{route('product.order.income')}}";
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    function number_format(number, decimals, dec_point, thousands_sep) {
      // *     example: number_format(1234.56, 2, ',', ' ');
      // *     return: '1 234,56'
      number = (number + '').replace(',', '').replace(' ', '');
      var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
          var k = Math.pow(10, prec);
          return '' + Math.round(n * k) / k;
        };
      // Fix for IE parseFloat(0.55).toFixed(0) = 0;
      s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
      if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
      }
      if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
      }
      return s.join(dec);
    }

      // Area Chart Example
      var ctx = document.getElementById("myAreaChart");

        axios.get(url)
              .then(function (response) {
                const data_keys = Object.keys(response.data);
                const data_values = Object.values(response.data);
                var myLineChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                    labels: data_keys, // ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                      label: "Earnings",
                      lineTension: 0.3,
                      backgroundColor: "rgba(78, 115, 223, 0.05)",
                      borderColor: "rgba(78, 115, 223, 1)",
                      pointRadius: 3,
                      pointBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointBorderColor: "rgba(78, 115, 223, 1)",
                      pointHoverRadius: 3,
                      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                      pointHitRadius: 10,
                      pointBorderWidth: 2,
                      data:data_values,// [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
                    }],
                  },
                  options: {
                    maintainAspectRatio: false,
                    layout: {
                      padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                      }
                    },
                    scales: {
                      xAxes: [{
                        time: {
                          unit: 'date'
                        },
                        gridLines: {
                          display: false,
                          drawBorder: false
                        },
                        ticks: {
                          maxTicksLimit: 7
                        }
                      }],
                      yAxes: [{
                        ticks: {
                          maxTicksLimit: 5,
                          padding: 10,
                          // Include a dollar sign in the ticks
                          callback: function(value, index, values) {
                            return '$' + number_format(value);
                          }
                        },
                        gridLines: {
                          color: "rgb(234, 236, 244)",
                          zeroLineColor: "rgb(234, 236, 244)",
                          drawBorder: false,
                          borderDash: [2],
                          zeroLineBorderDash: [2]
                        }
                      }],
                    },
                    legend: {
                      display: false
                    },
                    tooltips: {
                      backgroundColor: "rgb(255,255,255)",
                      bodyFontColor: "#858796",
                      titleMarginBottom: 10,
                      titleFontColor: '#6e707e',
                      titleFontSize: 14,
                      borderColor: '#dddfeb',
                      borderWidth: 1,
                      xPadding: 15,
                      yPadding: 15,
                      displayColors: false,
                      intersect: false,
                      mode: 'index',
                      caretPadding: 10,
                      callbacks: {
                        label: function(tooltipItem, chart) {
                          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                        }
                      }
                    }
                  }
                });
              })
              .catch(function (error) {
              //   vm.answer = 'Error! Could not reach the API. ' + error
              console.log(error)
              });

  </script>
@endpush