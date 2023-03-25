$(document).ready(function() {

    $('#year').change(function () {
        $('#invoice_id').html('');
        let year = $('#year').val()
        let month = $('#month').val()
        if(year != '' && year != null && month != '' && month != null){
            $.ajax({
                type: "GET",
                url: "/api/invoice/"+year+"/"+month,
                success: function (result) {
                    $('#invoice_id').append('<option value="">Pilih Invoice</option>');
                    if (result.length > 0) {
                        result.forEach(item => {
                            $('#invoice_id').append('<option value="'+item.id+'">'+item.number+' - '+item.unit.owner.name+'</option>');
                        });
                    }
                }
            });
        }
        $('#invoice_periode').val('')
        $('#invoice_name').val('')
        $('#invoice_unit').val('')
        $('#invoice_total').val('')

        $('#payment_date').attr('disabled', true)
        $('#payment_method').attr('disabled', true)
        $('#payment_name').attr('disabled', true)
        $('#payment_total').attr('disabled', true)

        $('#payment_name').val('')
        $('#payment_total').val('')
        $('#payment_status').val('')
        $('#payment_status_show').val('')
    })

    $('#month').change(function () {
        $('#invoice_id').html('');
        let year = $('#year').val()
        let month = $('#month').val()
        if(year != '' && year != null && month != '' && month != null){
            $.ajax({
                type: "GET",
                url: "/api/invoice/"+year+"/"+month,
                success: function (result) {
                    $('#invoice_id').append('<option value="">Pilih Invoice</option>');
                    if (result.length > 0) {
                        result.forEach(item => {
                            $('#invoice_id').append('<option value="'+item.id+'">'+item.number+' - '+item.unit.owner.name+'</option>');
                        });
                    }
                }
            });
        }
        $('#invoice_periode').val('')
        $('#invoice_name').val('')
        $('#invoice_unit').val('')
        $('#invoice_total').val('')

        $('#payment_date').attr('disabled', true)
        $('#payment_method').attr('disabled', true)
        $('#payment_name').attr('disabled', true)
        $('#payment_total').attr('disabled', true)

        $('#payment_name').val('')
        $('#payment_total').val('')
        $('#payment_status').val('')
        $('#payment_status_show').val('')
    })

    $('#payment_date').attr('disabled', true)
    $('#payment_method').attr('disabled', true)
    $('#payment_name').attr('disabled', true)
    $('#payment_total').attr('disabled', true)

    $('#invoice_id').change(function () {
        let id = $('#invoice_id').val()
        if(id != '' && id != null){
            $.ajax({
                type: "GET",
                url: "/api/invoice/"+id,
                success: function (result) {
                    const monthNames = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"
                    ];
                    Number.prototype.format = function(n, x) {
                        var re = '(\\d)(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1.');
                    };

                    var date = new Date(result.year+'-'+result.month+'-1')
                    $('#invoice_periode').val(monthNames[date.getMonth()]+'-'+date.getFullYear())
                    $('#invoice_name').val(result.unit.owner.name)
                    $('#invoice_unit').val(result.unit.full_number)
                    $('#invoice_total').val(result.grand_total.format(0))

                    $('#payment_name').val(result.unit.owner.name)
                    $('#payment_total').val(result.grand_total.format(0))
                    $('#payment_status').val('ACRUAL PAID')
                    $('#payment_status_show').val('LUNAS')

                    $('#payment_date').attr('disabled', false)
                    $('#payment_method').attr('disabled', false)
                    $('#payment_name').attr('disabled', false)
                    $('#payment_total').attr('disabled', false)
                }
            });
        }else{
            $('#invoice_periode').val('')
            $('#invoice_name').val('')
            $('#invoice_unit').val('')
            $('#invoice_total').val('')

            $('#payment_date').attr('disabled', true)
            $('#payment_method').attr('disabled', true)
            $('#payment_name').attr('disabled', true)
            $('#payment_total').attr('disabled', true)

            $('#payment_name').val('')
            $('#payment_total').val('')
            $('#payment_status').val('')
            $('#payment_status_show').val('')
        }
    })

    $('#payment_total').on('input', function () {
        Number.prototype.format = function(n, x) {
            var re = '(\\d)(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
            return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1.');
        };
        let value = 0
        if($(this).val() != ''){
            value = parseInt($(this).val().split('.').join(''))
        }
        let invoice = parseInt($('#invoice_total').val().split('.').join(''))
        console.log(value+' > '+invoice)
        if(value == invoice){
            $('#payment_status').val('ACRUAL PAID')
            $('#payment_status_show').val('LUNAS')
        }else if(value > invoice){
            $('#payment_status').val('ACRUAL - LEBIH BAYAR')
            $('#payment_status_show').val('LUNAS - LEBIH BAYAR')
        }else{
            $('#payment_status').val('NOT ACRUAL - KURANG BAYAR')
            $('#payment_status_show').val('KURANG BAYAR')
        }
        $('#payment_total').val(value.format(0))
    })

});
