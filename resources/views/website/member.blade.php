@extends('layouts.master')

@section('content')
    <section class="section-content-block">
        <div class="container">
            <div class="row">
                
                <h2 class="text-center members">Members</h2>
                <div class="scroll">
                    <table>
                        <tr class="table-header">
                            <th class="simple-th">S.N</th>
                            <th class="simple-th">Position</th>
                            <th class="simple-th">Name</th>
                            <th class="simple-th">Contact</th>
                            <th class="simple-th">Addres</th>
                        </tr>
                        <tr>
                            <td>1</th>
                            <td>Front-end developer</td>
                            <td>Sunil Machhara Chaudhary</td>
                            <td>9800000000</td>
                            <td>Germany</td>
                        </tr>
                    </table>
                </div>
            </div> <!--  end .row  -->
        </div> <!--  end container -->
    </section> <!-- end .section-content-block  -->
@endsection
