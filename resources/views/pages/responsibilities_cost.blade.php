@extends('layouts.layout')

@section('title', 'Responsibilities &amp; Cost')

@section('content')

@if ($agent->isMobile())

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h3 id="dark-purple">Responsibilities:</h3>
                        <ul>
                            <li id="light-purple">Parents/Guardians</li>
                                <ul>
                                    <li>Dress children accordingly to the weather. All children must wear comfortable shoes they can run and play in, and wear a hat.</li>
                                    <li>Bring packed lunch and water bottle</li>
                                </ul>
                            </li>
                            <li id="light-purple">NYCity Cubs</li>
                                <ul>

                                    <li>MetroCards for program trips</li>
                                    <li>Sun block, snacks</li>
                                </ul>
                        </ul>

                    <h3 id="dark-purple">Program Cost Breakdown:</h3>
                            <ul>
                                <li id="light-purple">Cost per student</li>
                                    <ul>
                                        <li>$54 per day</li>
                                        <li>$270 per week</li>
                                        <li id="bold">$540 total cost</li>
                                    </ul>
                                <li id="light-purple">Cost of a sibling</li>
                                    <ul>
                                        <li>$28 per day</li>
                                        <li>$135 per week</li>
                                        <li id="bold">$270 total cost</li>
                                    </ul>
                            </ul>

                    <h4>*10% discount if total amount is paid by Monday June 19th</h4>
                    <h4>Cost can be paid in installments. See table below:</h4>

                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-bordered table-hover" id="bold">
                                <tr>
                                    <td>June 19th</td>
                                    <td>$175</td>
                                </tr>
                                <tr id="tr-orange">
                                    <td>June 26th</td>
                                    <td>$175</td>
                                </tr>
                                <tr>
                                    <td>July 3rd</td>
                                    <td>$95</td>
                                </tr>
                                <tr id="tr-orange">
                                    <td>July 10th</td>
                                    <td>$95</td>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@else

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <table class="table table-bordered table-hover">
                        <th id="th-responsibilities" colspan="4"><h4 id="bold">Responsibilities:</h4></th>
                            <tr>
                                <td id="bold">Parents/Guardians</td>
                                <td>Dress children accordingly to the weather. All children must wear comfortable shoes they can run and play in, and wear a hat.</td>
                                <td>Bring packed lunch and water bottle</td>
                            </tr>
                            <tr>
                                <td id="bold">NYCity Cubs</td>
                                <td>MetroCards for program trips</td>
                                <td>Sun block, snacks</td>
                            </tr>
                    </table>

                    <table class="table table-bordered table-hover">
                        <th id="th-cost" colspan="4"><h4 id="bold">Program Cost Breakdown:</h4></th>
                            <tr>
                                <td id="bold">Cost per student</td>
                                <td>$54 per day</td>
                                <td>$270 per week</td>
                                <td id="bold">$540 total cost</td>
                            </tr>
                            <tr>
                                <td id="bold">Cost of a sibling</td>
                                <td>$28 per day</td>
                                <td>$135 per week</td>
                                <td id="bold">$270 total cost</td>
                            </tr>
                    </table>

                    <h4>*10% discount if total amount is paid by Monday June 19th</h4>
                    <p>Cost can be paid in installments. See table below:</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-bordered table-hover" id="bold">
                                <tr>
                                    <td>June 19th</td>
                                    <td>$175</td>
                                </tr>
                                <tr id="tr-orange">
                                    <td>June 26th</td>
                                    <td>$175</td>
                                </tr>
                                <tr>
                                    <td>July 3rd</td>
                                    <td>$95</td>
                                </tr>
                                <tr id="tr-orange">
                                    <td>July 10th</td>
                                    <td>$95</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif

@stop
