@extends('layouts.layout')
@section('header')
    Supprimer cet utilisateur
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Supprimer un utilisateur</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-md-16 col-md-offset-16">
                                <button id="buttona" class="btn btn-warning">Supprimer l'utilisateur {{ $user->name }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-content')
<script>
    // href="{{ route('users.destroy', $user->id) }}"
/*
        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            })
            $('[data-toggle="tooltip"]').tooltip()
            $('a.delete').click(function(e) {
                let that = $(this)
                e.preventDefault()
                const swalWithBootstrapButtons = swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
})

        swalWithBootstrapButtons({
            title: '@lang('Voulez-vous vraiment restaurer cet utilisateur  ?')',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: '@lang('Oui')',
            cancelButtonText: '@lang('Non')',
            
        }).then((result) => {
            if (result.value) {
                $('[data-toggle="tooltip"]').tooltip('hide')
                    $.ajax({                        
                        url: that.attr('href'),
                        type: 'PUT'
                    })
                    .done(function () {
                            that.parents('tr').remove()
                    })

                swalWithBootstrapButtons(
                'Restauré!',
                'L\'utilisateur a bien été restauré.',
                'success'
                )
                
                
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons(
                'Annulé',
                'L\'utlisateur n\'a pas été restauré :)',
                'error'
                )
            }
        })
            })
        })*/

$( document ).ready(function() {
/* $('butttona').click(function(e) {
               let that = $(this)
               e.preventDefault()
               const swalWithBootstrapButtons = swal.mixin({
           confirmButtonClass: 'btn btn-success',
           cancelButtonClass: 'btn btn-danger',
           buttonsStyling: false,
})
           });
swalWithBootstrapButtons({

           title: 'test test test',
            type: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#DD6B55;'
           confirmButtonText: 'Oui',
           cancelButtonText: 'Non',
       });     */
$('#buttona').click(function(e) {
    e.preventDefault();
   swal({
      title: 'Etes vous sûr?',
      text: 'Si supprimé, l\' utilisateur perdra toutes ses données',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Oui',
      cancelButtonText: 'Non',
    })
    .then((result) => {
        if (result.value) {
                $.ajax({
                        url: '{{ route('destroyed' , $user->id) }}',
                        type: 'GET',
                })
            swal(
            'Supprimé',
            'L\'utilisateur a été supprimé',
            'success',
            )
            
        } else if (
            // Read more about handling dismissals
            result.dismiss === swal.DismissReason.cancel
        ) {
            swal(
            'Annulé',
            'L\'utlisateur n\'a pas été supprimé',
            'error',
            )
        }
    });
});
})

</script>
@endsection
<!-- method="POST" action="{{ route('users.destroy', $user->id) }}" -->