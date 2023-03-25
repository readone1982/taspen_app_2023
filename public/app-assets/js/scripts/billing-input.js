$(document).ready(function() {

    $('#unit_id').change(function () {
        let unit_id = $('#unit_id').val()
        let year = $('#year').val()
        let month = $('#month').val()
        if(unit_id != '' && unit_id != null){
            $.ajax({
                type: "GET",
                url: "/api/usage/"+unit_id+"/"+year+"/"+month,
                success: function (result) {
                    if(result.length > 0){
                        $('#listrik_end_before').val(result[0].listrik_end)
                        $('#listrik_end_before').attr('disabled', true)

                        $('#listrik_start').val(result[0].listrik_end)
                        // $('#listrik_start').attr('readonly', true)
                        $('#listrik_end').val(result[0].listrik_end)
                        $('#listrik_pemakaian').val(result[0].listrik_end - result[0].listrik_end)

                        $('#air_end_before').val(result[0].air_end)
                        $('#air_end_before').attr('disabled', true)

                        $('#air_start').val(result[0].air_end)
                        // $('#air_start').attr('readonly', true)
                        $('#air_end').val(result[0].air_end)
                        $('#air_pemakaian').val(result[0].air_end - result[0].air_end)
                    }else{
                        $('#listrik_end_before').val('-')
                        $('#listrik_end_before').attr('disabled', true)

                        $('#listrik_start').val(0)
                        // $('#listrik_start').attr('disabled', false)
                        $('#listrik_end').val(0)
                        $('#listrik_pemakaian').val(0)

                        $('#air_end_before').val('-')
                        $('#air_end_before').attr('disabled', true)

                        $('#air_start').val(0)
                        // $('#air_start').attr('disabled', false)
                        $('#air_end').val(0)
                        $('#air_pemakaian').val(0)
                    }
                }
            });
        }else{
            $('#listrik_end_before').val('-')
            $('#listrik_end_before').attr('disabled', true)

            $('#listrik_start').val(0)
            // $('#listrik_start').attr('disabled', false)
            $('#listrik_end').val(0)
            $('#listrik_pemakaian').val(0)

            $('#air_end_before').val('-')
            $('#air_end_before').attr('disabled', true)

            $('#air_start').val(0)
            // $('#air_start').attr('disabled', false)
            $('#air_end').val(0)
            $('#air_pemakaian').val(0)
        }
    })

    $('#listrik_start').on('input', function () {
        // let value = parseFloat($('#listrik_start').val())
        let value = $('#listrik_start').val()
        if($('#listrik_start').val() == ''){
            value = 0
        }
        $('#listrik_start').val(value)
    })

    $('#listrik_end').on('input', function () {
        let value_before = parseFloat($('#listrik_end_before').val())
        // let value = parseFloat($('#listrik_end').val())
        let value = $('#listrik_end').val()
        let value_start = parseFloat($('#listrik_start').val())
        if($('#listrik_end').val() == ''){
            value = 0
        }
        $('#listrik_end').val(value)
        $('#listrik_pemakaian').val(Number.parseFloat(value - value_start).toFixed(2))
    })

    $('#air_start').on('input', function () {
        // let value = parseFloat($('#air_start').val())
        let value = $('#air_start').val()
        if($('#air_start').val() == ''){
            value = 0
        }
        $('#air_start').val(value)
    })

    $('#air_end').on('input', function () {
        let value_before = parseFloat($('#air_end_before').val())
        // let value = parseFloat($('#air_end').val())
        let value = $('#air_end').val()
        let value_start = parseFloat($('#air_start').val())
        if($('#air_end').val() == ''){
            value = 0
        }
        $('#air_end').val(value)
        $('#air_pemakaian').val(Number.parseFloat(value - value_start).toFixed(2))
    })

});
