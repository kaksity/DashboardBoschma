@extends('website.layout')

@section('page-content')
<div class="container-fluid">
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="mt-2 mb-2">
                <h4 class="side-border p-2 fw-bolder">INFORMAL SECTOR</h4>
            </div>
            <hr>
            <div class="col-md-12">
                <h6>The Informal Sector schemes are social health security arrangement for people in the informal sector
                    or economy. It is for those without structured salary hence not covered by formal sector program,
                    e.g. artisans, voluntary participants, rural dwellers that are not employed and other vulnerable
                    groups.</h6>
                <p class="text-dark">
                    The informal schemes will have a <b class="text-warning">premium</b> of Twelve Thousand Naira only
                    (N12,000.00) per head per annum. The benefit package of the formal sector will apply to the informal
                    sector.
                </p>

                <h6>The schemes are;</h6>
                <div class="cu-list">
                    <ul>
                        <li>Individual, Family and Group contributory scheme</li>
                        <li>Vulnerable group contributory Scheme (BHCPF)</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border bg-primary rounded-3">
            <h5 class="text-light text-center text-uppercase p-2">
                Individual, Family and Group Contributory Scheme (IFGCS)
            </h5>
        </div>
        <div class="container">
            <div class="p-2 fw-bolder">
                <p class="text-dark">This is a non-profit contributory healthcare scheme for individuals, families and
                    groups including occupation-based groups (e.g. market women associations, Commercial cycle riders
                    etc) managed on the basis of collective pooling of health risks by the agency.</p>
            </div>

            <div class="mt-2 mb-2">
                <h5 class="side-border text-secondary p-2">
                    Membership:
                </h5>
            </div>
            <div class="p-2">
                <p class="text-dark">This shall be voluntary and open to all residents of the state. The family or
                    individual members shall be the unit of registration.</p>
            </div>

            <div class="mt-2 mb-2">
                <h5 class="side-border p-2">
                    Registration Procedure
                </h5>
            </div>
            <div class="p-2">
                <p class="text dark">
                    Registration of enrollees shall be by the agency. The program shall have a clearly defined procedure
                    for registering enrollees as well as providing a form of identification.
                </p>
            </div>

            <div class="mt-2 mb-2">
                <h5 class="side-border p-2">
                    Benefit Package
                </h5>
            </div>
            <div class="p-2">
                <p>The individual, family and group contributory scheme will have the same benefit package with the
                    formal sector programme.</p>
            </div>
            <div class="mt-2 mb-2">
                <h5 class="side-border p-2">
                    Drugs And Consumables
                </h5>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 p-3">
                    <table class="table table-striped border">
                        <tr class="bg-primary text-light">
                            <th>DRUGS</th>
                        </tr>
                        <tbody id="content">

                        </tbody>
                    </table>
                </div>

                <div class="col-md-6 col-sm-12 p-3">
                    <table class="table table-striped border">
                        <tr class="bg-primary text-light">
                            <th>CONSUMABLES</th>
                        </tr>
                        <tbody id="content2">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="mt-2 mb-2">
            <h5 class="side-border p-2">
                Contribution/Premium
            </h5>
        </div>
        <div class="p-2">
            <p class="text-dark">
                A contribution of Twelve Thousand Naira only (N12,000.00)per annum/individual subject to review by the
                Agency. Individuals, families and groups will be required to pay the contribution in advance.
            </p>
        </div>
        <div class="mt-2 mb-2">
            <h5 class="side-border p-2">
                Payment Mechanism for IFGCS Scheme
            </h5>
        </div>
        <div class="p-2 mb-3">
            <p class="text-dark">
                The agency will pay for services via capitation and fee-for-service using the prices and tariffs of the
                agency.
            </p>
        </div>

        <div class="mt-2 mb-2">
            <h5 class="side-border text-danger p-2">
                Donations/Sponsorship:
            </h5>
        </div>
        <div class="p-2 mb-3">
            <p class="text-dark">
                The Agency may seek for donations/grants/sponsorship to provide cover for beneficiaries of this scheme
                by targeting individuals, philanthropists, governmental and Civil Society Organizations, donor agencies
                etc.
            </p>
        </div>



    </div>
</div>
</div>
@endsection
