@extends('layouts.layout')

@section('title', 'Responsabilities &amp; Cost')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <table class="table table-bordered table-hover">
                        <th id="th-responsabilities" colspan="4"><h4 id="bold">Responsabilities:</h4></th>
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

@stop
