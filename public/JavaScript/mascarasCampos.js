$(document).ready(function($) {
    $('#cpfClient').mask('000.000.000-00');
    $('#siglaState').mask('AA');
    $('#phoneClient').mask('(00) 00000-0000');
    $('#balanceAccount').mask('#.##0,00', { reverse: true });
});