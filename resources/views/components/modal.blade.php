@props(['size' => 'xl','id','title'])
<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div {{ $attributes->merge(['class' => 'modal-dialog modal-'.$size]) }} role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">{{ $title }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>  
        <div class="modal-body">  
            {{ $slot }}
        </div>
        <div class="modal-footer justify-content-between">
            {{ $footer ?? '' }}
        </div>        
      </div>
    </div>
</div>