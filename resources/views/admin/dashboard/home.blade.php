@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view projects-view">

    <div class="container-fluid">
        <h2 class="view-title">Dashboard Use Case 1 (Project Management System)</h2>
        <div class="row">
            <div class="col-wrapper col-lg-7 col-12">
                <div class="module-wrapper">
                    <section class="module module-has-footer module-projects-overview">
                        <div class="module-inner">
                            <div class="module-heading">
                                <h3 class="module-title">Overview</h3>
                                <ul class="actions list-inline">
                                    <li class="more-link">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">More</a>
                                            <ul class="dropdown-menu dropdown-menu-right">

                                                <span class="arrow"></span>
                                                <a class="dropdown-item" href="#">Action 1</a>
                                                <a class="dropdown-item" href="#">Action 2</a>
                                                <a class="dropdown-item" href="#">Action 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>

                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="collapse-module" data-toggle="collapse" href="#content-overview"
                                            aria-expanded="false" aria-controls="content-overview"><span
                                                aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
                                    <li><a class="close-module" href="#"><span aria-hidden="true"
                                                class="icon icon_close"></span></a></li>
                                </ul>

                            </div>

                            <div class="module-content collapse show" id="content-overview">
                                <div class="module-content-inner">
                                    <ul class="data-list row text-center">
                                        <li class="item item-1 col-xl-3 col-6">
                                            <a href="projects.html">
                                                <span aria-hidden="true" class="icon icon_toolbox_alt"></span>
                                                <span class="data">16</span>
                                                <span class="desc">Open <br>Projects</span>
                                            </a>
                                        </li>
                                        <li class="item item-2 col-xl-3 col-6">
                                            <a href="tickets.html">
                                                <span aria-hidden="true" class="icon icon_box-checked"></span>
                                                <span class="data">769</span>
                                                <span class="desc">Open <br>Tickets</span>
                                            </a>
                                        </li>
                                        <li class="item item-3 col-xl-3 col-6">
                                            <a href="discussions.html">
                                                <span aria-hidden="true" class="icon icon_chat_alt"></span>
                                                <span class="data">23</span>
                                                <span class="desc">New <br>Discussions</span>
                                            </a>
                                        </li>
                                        <li class="item item-4 col-xl-3 col-6">
                                            <a href="invoice.html">
                                                <span aria-hidden="true" class="icon icon_documents_alt"></span>
                                                <span class="data">$8,625</span>
                                                <span class="desc">Invoiced<br>Amount</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="time-overview col-xl-6 col-12 mb-5 mb-xl-0">
                                            <div class="inner p-xl-2 p-lg-1">
                                                <h4 class="title"><i class="far fa-clock mr-2 icon"></i>Time Logged</h4>
                                                <div class="chart-container">
                                                    <div id="time-chart" class="flot-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="type-overview col-xl-6 col-12">
                                            <div class="inner p-xl-2 p-lg-1">
                                                <h4 class="title"><i class="fas fa-chart-pie mr-2 icon"></i>Project
                                                    Types</h4>
                                                <div class="chart-container">
                                                    <div id="type-chart" class="flot-chart"></div>
                                                    <div id="type-chart-legend"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="module-footer text-center">
                            <p class="meta">Time Period: 2 weeks (June 01 - June 14, 2016)</p>
                        </div>
                    </section>
                </div>


                <div class="row">
                    <div class="module-wrapper col-xl-6 col-12">
                        <section class="module module-has-footer module-projects-list">
                            <div class="module-inner">
                                <div class="module-heading">
                                    <h3 class="module-title">Latest Projects</h3>

                                    <ul class="actions list-inline">
                                        <li class="more-link">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">More</a>
                                                <ul class="dropdown-menu dropdown-menu-right">

                                                    <span class="arrow"></span>
                                                    <a class="dropdown-item" href="#">Action 1</a>
                                                    <a class="dropdown-item" href="#">Action 2</a>
                                                    <a class="dropdown-item" href="#">Action 3</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>

                                                </ul>
                                            </div>
                                        </li>
                                        <li><a class="collapse-module" data-toggle="collapse" href="#content-projects"
                                                aria-expanded="false" aria-controls="content-overview"><span
                                                    aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
                                        <li><a class="close-module" href="#"><span aria-hidden="true"
                                                    class="icon icon_close"></span></a></li>
                                    </ul>

                                </div>

                                <div class="module-content collapse show" id="content-projects">
                                    <div class="module-content-inner">
                                        <div class="table-responsive">
                                            <table class="table table-simple">
                                                <thead>
                                                    <tr>
                                                        <th class="truncate">Project Name</th>
                                                        <th>Budget</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="truncate"><a href="project.html">Project lorem
                                                                ipsum</a></td>
                                                        <td>
                                                            <div class="progress-container">
                                                                <span class="progress progress-sm">
                                                                    <span class="progress-bar progress-bar-info"
                                                                        role="progressbar" aria-valuenow="55"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 55%">

                                                                    </span>
                                                                </span>

                                                                <span
                                                                    class="progress-pc d-none d-sm-inline-block">55%</span>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="truncate"><a href="project.html">Mobile app for
                                                                egestas vehicula</a></td>
                                                        <td>
                                                            <div class="progress-container">
                                                                <span class="progress progress-sm">
                                                                    <span class="progress-bar progress-bar-danger"
                                                                        role="progressbar" aria-valuenow="110"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 110%">

                                                                    </span>
                                                                </span>

                                                                <span
                                                                    class="progress-pc d-none d-sm-inline-block">110%</span>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="truncate"><a href="project.html">Campaign for vivamus
                                                                elementum fringilla mauris amet adipiscing</a></td>
                                                        <td>
                                                            <div class="progress-container">
                                                                <span class="progress progress-sm">
                                                                    <span class="progress-bar progress-bar-info"
                                                                        role="progressbar" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 25%">

                                                                    </span>
                                                                </span>

                                                                <span
                                                                    class="progress-pc d-none d-sm-inline-block">25%</span>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="truncate"><a href="project.html">Campaign for Etiam
                                                                Sit amet</a></td>
                                                        <td>
                                                            <div class="progress-container">
                                                                <span class="progress progress-sm">
                                                                    <span class="progress-bar progress-bar-info"
                                                                        role="progressbar" aria-valuenow="75"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 95%">

                                                                    </span>
                                                                </span>

                                                                <span
                                                                    class="progress-pc d-none d-sm-inline-block">75%</span>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="truncate"><a href="project.html">Webapp for Pede
                                                                Justo</a></td>
                                                        <td>
                                                            <div class="progress-container">
                                                                <span class="progress progress-sm">
                                                                    <span class="progress-bar progress-bar-warning"
                                                                        role="progressbar" aria-valuenow="95"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 95%">

                                                                    </span>
                                                                </span>

                                                                <span
                                                                    class="progress-pc d-none d-sm-inline-block">95%</span>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="module-footer text-center">
                                <ul class="shortcuts list-inline">
                                    <li class="list-inline-item"><a href="projects.html">View all projects (56)</a></li>
                                    <li class="list-inline-item"><a href="projects.html">My projects (2)</a></li>
                                    <li class="list-inline-item"><a href="#">Add Project</a></li>
                                </ul>
                            </div>

                        </section>

                    </div>


                    <div class="module-wrapper col-xl-6 col-12">
                        <section class="module module-has-footer module-tickets">
                            <div class="module-inner">
                                <div class="module-heading">
                                    <h3 class="module-title">New Tickets</h3>
                                    <ul class="actions list-inline">
                                        <li class="more-link">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">More</a>
                                                <ul class="dropdown-menu dropdown-menu-right">

                                                    <span class="arrow"></span>
                                                    <a class="dropdown-item" href="#">Action 1</a>
                                                    <a class="dropdown-item" href="#">Action 2</a>
                                                    <a class="dropdown-item" href="#">Action 3</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>

                                                </ul>
                                            </div>
                                        </li>
                                        <li><a class="collapse-module" data-toggle="collapse" href="#content-tickets"
                                                aria-expanded="false" aria-controls="content-overview"><span
                                                    aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
                                        <li><a class="close-module" href="#"><span aria-hidden="true"
                                                    class="icon icon_close"></span></a></li>
                                    </ul>

                                </div>

                                <div class="module-content collapse show" id="content-tickets">
                                    <div class="module-content-inner">
                                        <div class="table-responsive">
                                            <table class="table table-simple">
                                                <thead>
                                                    <tr>
                                                        <th class="number">NO.</th>
                                                        <th class="truncate">Ticket Name</th>
                                                        <th>Priority</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="badge badge-number">#37</span></td>
                                                        <td class="truncate"><a href="#">Ticket lorem ipsum sodales
                                                                sagittis</a></td>
                                                        <td><span class="badge badge-normal">Normal</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="badge badge-number">#212</span></td>
                                                        <td class="truncate"><a href="#">Refactor fringilla mauris
                                                                code</a></td>
                                                        <td><span class="badge badge-low">Low</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="badge badge-number">#36</span></td>
                                                        <td class="truncate"><a href="#">UX workshop for sodales
                                                                sagittis</a></td>
                                                        <td><span class="badge badge-high">High</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="badge badge-number">#16</span></td>
                                                        <td class="truncate"><a href="#">Build form modules</a></td>
                                                        <td><span class="badge badge-critical">Critical</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="badge badge-number">#23</span></td>
                                                        <td class="truncate"><a href="#">Lorem ipsum dolor sit amet
                                                                adipiscing elit</a></td>
                                                        <td><span class="badge badge-success">In Progress</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="module-footer text-center">
                                <ul class="shortcuts list-inline">
                                    <li class="list-inline-item"><a href="tickets.html">View all tickets (639)</a></li>
                                    <li class="list-inline-item"><a href="tickets.html">My tickets (18)</a></li>
                                    <li class="list-inline-item"><a href="#">Add Ticket</a></li>
                                </ul>
                            </div>

                        </section>

                    </div>

                </div>


                <div class="module-wrapper">
                    <section class="module module-projects-invoices">
                        <div class="module-inner">
                            <div class="module-heading">
                                <h3 class="module-title">New Invoices</h3>
                                <ul class="actions list-inline">
                                    <li class="more-link">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">More</a>
                                            <ul class="dropdown-menu dropdown-menu-right">

                                                <span class="arrow"></span>
                                                <a class="dropdown-item" href="#">Action 1</a>
                                                <a class="dropdown-item" href="#">Action 2</a>
                                                <a class="dropdown-item" href="#">Action 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>

                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="collapse-module" data-toggle="collapse" href="#content-invoices"
                                            aria-expanded="false" aria-controls="content-overview"><span
                                                aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
                                    <li><a class="close-module" href="#"><span aria-hidden="true"
                                                class="icon icon_close"></span></a></li>
                                </ul>

                            </div>

                            <div class="module-content collapse show" id="content-invoices">
                                <div class="module-content-inner">
                                    <div class="table-responsive">
                                        <table class="table table-simple table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="number">Invoice No.</th>
                                                    <th>Due Date</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="invoice.html"
                                                            class="badge badge-number-alt">IVN0653</a></td>
                                                    <td class="date truncate"><a href="invoice.html">Sep 23, 2015</a>
                                                    </td>
                                                    <td class="total"><span
                                                            class="currency d-none d-sm-inline-block">USD</span> <a
                                                            href="invoice.html">$32,000</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="invoice.html"
                                                            class="badge badge-number-alt">IVN0653</a></td>
                                                    <td class="date truncate"><a href="invoice.html">Jun 18, 2015</a>
                                                    </td>
                                                    <td class="total"><span
                                                            class="currency d-none d-sm-inline-block">EUR</span> <a
                                                            href="invoice.html">€16,000</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="invoice.html"
                                                            class="badge badge-number-alt">IVN0653</a></td>
                                                    <td class="date truncate"><a href="invoice.html">May 14, 2015</a>
                                                    </td>
                                                    <td class="total"><span
                                                            class="currency d-none d-sm-inline-block">USD</span> <a
                                                            href="invoice.html">$5,500</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="invoice.html"
                                                            class="badge badge-number-alt">IVN0653</a></td>
                                                    <td class="date truncate"><a href="#">Apr 07, 2015</a></td>
                                                    <td class="total"><span
                                                            class="currency d-none d-sm-inline-block">GBP</span> <a
                                                            href="invoice.html">£18,400</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="invoice.html"
                                                            class="badge badge-number-alt">IVN0653</a></td>
                                                    <td class="date truncate"><a href="invoice.html">Mar 23, 2015</a>
                                                    </td>
                                                    <td class="total"><span
                                                            class="currency d-none d-sm-inline-block">USD</span> <a
                                                            href="invoice.html">$14,200</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </section>

                </div>

                <div class="module-wrapper">
                    <section class="module module-map">
                        <div class="module-inner">
                            <div class="module-heading">
                                <h3 class="module-title">Client Locations</h3>
                                <ul class="actions list-inline">
                                    <li class="more-link">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">More</a>
                                            <ul class="dropdown-menu dropdown-menu-right">

                                                <span class="arrow"></span>
                                                <a class="dropdown-item" href="#">Action 1</a>
                                                <a class="dropdown-item" href="#">Action 2</a>
                                                <a class="dropdown-item" href="#">Action 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>

                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="collapse-module" data-toggle="collapse" href="#content-map"
                                            aria-expanded="false" aria-controls="content-overview"><span
                                                aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
                                    <li><a class="close-module" href="#"><span aria-hidden="true"
                                                class="icon icon_close"></span></a></li>
                                </ul>

                            </div>

                            <div class="module-content collapse show" id="content-map">
                                <div class="module-content-inner">
                                    <div id="world-map" class="world-map"></div>
                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </div>

            <div class="col-wrapper col-lg-5 col-12">
                <div class="module-wrapper">
                    <section class="module module-projects-sales">
                        <div class="module-inner">
                            <div class="module-heading">
                                <h3 class="module-title">Sales</h3>
                                <ul class="actions list-inline">
                                    <li class="more-link">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">More</a>
                                            <ul class="dropdown-menu dropdown-menu-right">

                                                <span class="arrow"></span>
                                                <a class="dropdown-item" href="#">Action 1</a>
                                                <a class="dropdown-item" href="#">Action 2</a>
                                                <a class="dropdown-item" href="#">Action 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>

                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="collapse-module" data-toggle="collapse" href="#content-sales"
                                            aria-expanded="false" aria-controls="content-overview"><span
                                                aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
                                    <li><a class="close-module" href="#"><span aria-hidden="true"
                                                class="icon icon_close"></span></a></li>
                                </ul>

                            </div>

                            <div class="module-content collapse show" id="content-sales">
                                <div class="module-content-inner">
                                    <div class="sales-info">
                                        <h3 class="figure-total text-highlight">$64,456<span class="meta">(Current
                                                Month)</span></h3>
                                        <ul class="list-unstyled list-currency">
                                            <li class="dollars">
                                                <img class="flag" src="assets/images/flags/us.png" alt="" />

                                                <span class="progress-container">
                                                    <span class="progress-pc">82%</span>
                                                    <span class="progress">
                                                        <span class="progress-bar progress-bar-success"
                                                            role="progressbar" aria-valuenow="82" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 82%">

                                                        </span>
                                                    </span>

                                                </span>

                                                <span class="figure-sub">$52,854</span>
                                            </li>
                                            <li class="pounds">
                                                <img class="flag" src="assets/images/flags/uk.png" alt="" />
                                                <span class="progress-container">
                                                    <span class="progress-pc">6%</span>
                                                    <span class="progress">
                                                        <span class="progress-bar progress-bar-success"
                                                            role="progressbar" aria-valuenow="6" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 6%">

                                                        </span>
                                                    </span>

                                                </span>

                                                <span class="figure-sub">£2,320</span>
                                            </li>
                                            <li class="euros">
                                                <img class="flag" src="assets/images/flags/eu.png" alt="" />
                                                <span class="progress-container">
                                                    <span class="progress-pc">12%</span>
                                                    <span class="progress">
                                                        <span class="progress-bar progress-bar-success"
                                                            role="progressbar" aria-valuenow="12" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 12%">

                                                        </span>
                                                    </span>

                                                </span>

                                                <span class="figure-sub">€4,321</span>
                                            </li>
                                        </ul>

                                        <div class="chart-container">
                                            <div id="sales-chart" class="flot-chart"></div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </section>

                </div>


                <div class="module-wrapper">
                    <section class="module module-projects-activities">
                        <div class="module-inner">
                            <div class="module-heading">
                                <h3 class="module-title">Recent Activities</h3>
                                <ul class="actions list-inline">
                                    <li class="more-link">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">More</a>
                                            <ul class="dropdown-menu dropdown-menu-right">

                                                <span class="arrow"></span>
                                                <a class="dropdown-item" href="#">Action 1</a>
                                                <a class="dropdown-item" href="#">Action 2</a>
                                                <a class="dropdown-item" href="#">Action 3</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>

                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="collapse-module" data-toggle="collapse" href="#content-activities"
                                            aria-expanded="false" aria-controls="content-overview"><span
                                                aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
                                    <li><a class="close-module" href="#"><span aria-hidden="true"
                                                class="icon icon_close"></span></a></li>
                                </ul>

                            </div>

                            <div class="module-content collapse show" id="content-activities">
                                <div class="module-content-inner">
                                    <div role="tabpanel" class="tab-wrapper">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-theme-1" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" href="#tab-1"
                                                    aria-controls="tab-1" role="tab" data-toggle="tab">All</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#tab-2" aria-controls="tab-2"
                                                    role="tab" data-toggle="tab">Projects</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#tab-3" aria-controls="tab-3"
                                                    role="tab" data-toggle="tab">Tickets</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#tab-4" aria-controls="tab-4"
                                                    role="tab" data-toggle="tab">Discussions</a></li>

                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="tab-1">
                                                <div class="item">
                                                    <div class="profile">
                                                        <div class="profile-inner">
                                                            <img src="assets/images/profiles/profile-1.png" alt="" />
                                                            <span class="status offline" data-toggle="tooltip"
                                                                data-placement="right" title="Offline"></span>
                                                        </div>

                                                    </div>

                                                    <div class="activity">
                                                        <p class="summary"><a class="profile-name" href="#">Ken D</a>
                                                            created a new project <a href="#">[Project fringilla vel
                                                                aliquet nec]</a></p>
                                                        <ul class="meta list-inline">
                                                            <li class="time list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_clock_alt"></span> 2 mins ago</li>
                                                            <li class="type list-inline-item"><span aria-hidden="true"
                                                                    class="icon  icon_toolbox_alt"></span> <a
                                                                    href="#">Project</a></li>
                                                        </ul>

                                                    </div>

                                                </div>

                                                <div class="item">
                                                    <div class="profile">
                                                        <div class="profile-inner">
                                                            <img src="assets/images/profiles/profile-2.png" alt="" />
                                                            <span class="status online" data-toggle="tooltip"
                                                                data-placement="right" title="Online"></span>
                                                        </div>

                                                    </div>

                                                    <div class="activity">
                                                        <p class="summary"><a class="profile-name" href="#">Rachel W</a>
                                                            shared a folder <a href="#">[UI mocks]</a></p>
                                                        <div class="excerpt">
                                                            <a href="#">I’m sharing this folder ahead of the team
                                                                meeting. Let me know if orem sed massa bibendum maximus
                                                                quis sit amet diam...</a>
                                                        </div>
                                                        <ul class="meta list-inline">
                                                            <li class="time list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_clock_alt"></span> 5 hrs ago</li>
                                                            <li class="type list-inline-item"><span aria-hidden="true"
                                                                    class="icon  icon_paperclip"></span> <a
                                                                    href="#">File</a></li>
                                                        </ul>

                                                    </div>

                                                </div>

                                                <div class="item">
                                                    <div class="profile">
                                                        <div class="profile-inner">
                                                            <img src="assets/images/profiles/profile-3.png" alt="" />
                                                            <span class="status busy" data-toggle="tooltip"
                                                                data-placement="right" title="Busy"></span>
                                                        </div>

                                                    </div>

                                                    <div class="activity">
                                                        <p class="summary"><a class="profile-name" href="#">Rebecca
                                                                S</a> commented on ticket <a href="#">[#22 Maecenas
                                                                tempus adipiscing]</a></p>
                                                        <div class="excerpt">
                                                            <a href="#">Hmm, is it possible to move mattis semper.
                                                                Pellentesque mattis libero at vestibulum vehicula. Lorem
                                                                ipsum dolor sit amet, consectetur. :)</a>
                                                        </div>
                                                        <ul class="meta list-inline">
                                                            <li class="time list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_clock_alt"></span> 3 days ago</li>
                                                            <li class="type list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_box-checked"></span> <a
                                                                    href="#">Ticket</a></li>
                                                        </ul>

                                                    </div>

                                                </div>

                                                <div class="item">
                                                    <div class="profile">
                                                        <div class="profile-inner">
                                                            <img src="assets/images/profiles/profile-4.png" alt="" />
                                                            <span class="status online" data-toggle="tooltip"
                                                                data-placement="right" title="Online"></span>
                                                        </div>

                                                    </div>

                                                    <div class="activity">
                                                        <p class="summary"><a class="profile-name" href="#">Ryan B</a>
                                                            started a new discussion <a href="#">[Some suggestions
                                                                regarding the code review process]</a></p>
                                                        <div class="excerpt">
                                                            <a href="#">Cras dapibus. Vivamus elementum semper nisi.
                                                                Aenean vulputate eleifend tellus. Aenean leo ligula
                                                                porttitor eu consequat vitae...</a>
                                                        </div>
                                                        <ul class="meta list-inline">
                                                            <li class="time list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_clock_alt"></span> Mar 23, 2015
                                                            </li>
                                                            <li class="type list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_chat_alt"></span> <a
                                                                    href="#">Discussion</a></li>
                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="tab-2">
                                                <div class="item">
                                                    <div class="profile">
                                                        <div class="profile-inner">
                                                            <img src="assets/images/profiles/profile-1.png" alt="" />
                                                            <span class="status offline" data-toggle="tooltip"
                                                                data-placement="right" title="Offline"></span>
                                                        </div>

                                                    </div>

                                                    <div class="activity">
                                                        <p class="summary"><a class="profile-name" href="#">Ken D</a>
                                                            created a new project <a href="#">[Project fringilla vel
                                                                aliquet nec]</a></p>
                                                        <ul class="meta list-inline">
                                                            <li class="time list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_clock_alt"></span> 2 mins ago</li>
                                                            <li class="type list-inline-item"><span aria-hidden="true"
                                                                    class="icon  icon_toolbox_alt"></span> <a
                                                                    href="#">Project</a></li>
                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="tab-3">
                                                <div class="item">
                                                    <div class="profile">
                                                        <div class="profile-inner">
                                                            <img src="assets/images/profiles/profile-3.png" alt="" />
                                                            <span class="status busy" data-toggle="tooltip"
                                                                data-placement="right" title="Busy"></span>
                                                        </div>

                                                    </div>

                                                    <div class="activity">
                                                        <p class="summary"><a class="profile-name" href="#">Rebecca
                                                                S</a> commented on ticket <a href="#">[#22 Maecenas
                                                                tempus adipiscing]</a></p>
                                                        <div class="excerpt">
                                                            <a href="#">Hmm, is it possible to move mattis semper.
                                                                Pellentesque mattis libero at vestibulum vehicula. Lorem
                                                                ipsum dolor sit amet, consectetur. :)</a>
                                                        </div>
                                                        <ul class="meta list-inline">
                                                            <li class="time list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_clock_alt"></span> 3 days ago</li>
                                                            <li class="type list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_box-checked"></span> <a
                                                                    href="#">Ticket</a></li>
                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="tab-4">
                                                <div class="item">
                                                    <div class="profile">
                                                        <div class="profile-inner">
                                                            <img src="assets/images/profiles/profile-4.png" alt="" />
                                                            <span class="status online" data-toggle="tooltip"
                                                                data-placement="right" title="Online"></span>
                                                        </div>

                                                    </div>

                                                    <div class="activity">
                                                        <p class="summary"><a class="profile-name" href="#">Ryan B</a>
                                                            started a new discussion <a href="#">[Some suggestions
                                                                regarding the code review process]</a></p>
                                                        <div class="excerpt">
                                                            <a href="#">Cras dapibus. Vivamus elementum semper nisi.
                                                                Aenean vulputate eleifend tellus. Aenean leo ligula
                                                                porttitor eu consequat vitae...</a>
                                                        </div>
                                                        <ul class="meta list-inline">
                                                            <li class="time list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_clock_alt"></span> Mar 23, 2015
                                                            </li>
                                                            <li class="type list-inline-item"><span aria-hidden="true"
                                                                    class="icon icon_chat_alt"></span> <a
                                                                    href="#">Discussion</a></li>
                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection
