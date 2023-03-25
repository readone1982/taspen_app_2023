$(document).ready(function() {

    $('#user_type_id').change(function(){
        $('#floor_id').val('').trigger('change')
        $('#wing_code_id').val('').trigger('change')
        $('#unit_number_id').val('').trigger('change')
        $('#unit_type_id').val('').trigger('change')
        $('#unit_size_id').val('').trigger('change')
        $('#voltage_size_id').val('').trigger('change')
        $('#verification').val('').trigger('change')

        $('#floor_id').attr('disabled', false)
        $('#wing_code_id').attr('disabled', false)
        $('#unit_number_id').prop('disabled', false)
        $('#unit_type_id').prop('disabled', false)
        $('#unit_size_id').prop('disabled', false)
        $('#voltage_size_id').prop('disabled', false)
        $('#verification').prop('disabled', false)
    })

    $('#resident_name').attr('disabled', true)
    $('#resident_ktp').attr('disabled', true)
    $('#resident_status').prop('disabled', true)

    $('#status_unit_id').change(function(){
        $('#resident_name').val('')
        $('#resident_ktp').val('')
        $('#resident_status').val('')
        let value = $('#status_unit_id').val()
        if(parseInt(value) == 3){
            $('#resident_name').attr('disabled', false)
            $('#resident_ktp').attr('disabled', false)
            $('#resident_status').prop('disabled', false)
        }else{
            $('#resident_name').attr('disabled', true)
            $('#resident_ktp').attr('disabled', true)
            $('#resident_status').prop('disabled', true)
        }
    })

    $('#owner_id').change(function () {
        let value = $('#owner_id').val()
        if(value != '' && value != null){
            $.ajax({
                type: "GET",
                url: "/api/unit/"+value,
                success: function (result) {
                    console.log(result)
                    $('#owner_name').val(result.name)
                    $('#owner_ktp').val(result.ktp)
                    $('#owner_npwp').val(result.npwp)
                    $('#owner_address').val(result.address)
                    $('#owner_hp').val(result.hp)
                    $('#owner_email').val(result.email)
                    $('#owner_sertificate').val(result.sertificate_no)
                    $('#owner_yearbuy').val(result.year_buy)

                    $('#owner_name').attr('disabled', true)
                    $('#owner_ktp').attr('disabled', true)
                    $('#owner_npwp').attr('disabled', true)
                    $('#owner_address').attr('disabled', true)
                    $('#owner_hp').attr('disabled', true)
                    $('#owner_email').attr('disabled', true)
                    $('#owner_sertificate').attr('disabled', true)
                    $('#owner_yearbuy').attr('disabled', true)
                }
            });
        }else{
            $('#owner_name').val('')
            $('#owner_ktp').val('')
            $('#owner_npwp').val('')
            $('#owner_address').val('')
            $('#owner_hp').val('')
            $('#owner_email').val('')
            $('#owner_sertificate').val('')
            $('#owner_yearbuy').val('')

            $('#owner_name').attr('disabled', false)
            $('#owner_ktp').attr('disabled', false)
            $('#owner_npwp').attr('disabled', false)
            $('#owner_address').attr('disabled', false)
            $('#owner_hp').attr('disabled', false)
            $('#owner_email').attr('disabled', false)
            $('#owner_sertificate').attr('disabled', false)
            $('#owner_yearbuy').attr('disabled', false)
        }
    })

});
