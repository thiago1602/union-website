@extends('adminlte::page')

@section('title', 'Grafico')

@section('content_header')
    <h1>Grafico</h1>
@stop
@section('content')

    <div class="container" >
        <div class="row">
            <div class="col">
                <p>Ganhos Mes</p>
                <canvas id="myChart"></canvas>
            </div>

            <div class="col">
                <p>Ganhos Total</p>
                <canvas id="myChart1"></canvas>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Ganhos Meses</p>
                <canvas id="laravel1"></canvas>
            </div>
        </div>
    </div>

@stop
@section('css')
    <style>
        #myChart {
            width:350px !important;
            height:350px !important;

        }
        #myChart1 {
            width:350px !important;
            height:350px !important;

        }
        #laravel1 {
            width:100% !important;
            height:450px !important;

        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const data = {
            labels: [
                'CLIENTES MES',
                'VENDAS MES'

            ],
            datasets: [{
                label: 'PRIMEIRO MES',
                data: [{{$qtdcliente}}, {{$qtdvenda}}],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {
                responsive: true
            }
        };

        const datan = {
            labels: [
                'TOTAL CLIENTE',
                'TOTAL VENDA'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [100, 300, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const confign = {
            type: 'doughnut',
            data: datan,
        };

        const labels = [
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
        ];
        const datane = {
            labels: labels,
            datasets: [{
                label: 'Vendas',
                data: [
                    @foreach ($vendas_meses as $vendames)
                        {{$vendames}},
                    @endforeach
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)',
                    'rgb(75, 192, 192)',
                    'rgb(75, 192, 192)',
                    'rgb(75, 192, 192)',
                    'rgb(75, 192, 192)',
                ],
                borderWidth: 1
            }]
        };
        const confignn = {
            type: 'bar',
            data: datane,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

    </script>


    <script>
        // === include 'setup' then 'config' above ===

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
        var myChart1 = new Chart(
            document.getElementById('myChart1'),
            confign
        );
        var laravel1 = new Chart(
            document.getElementById('laravel1'),
            confignn
        );

    </script>




@stop
