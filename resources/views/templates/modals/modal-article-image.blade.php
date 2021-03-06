<div id="modalEditArticleImage" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">
                    {{ trans('ocv.edit') }}
                    |
                    {{ trans('ocv.kb') }} | {{ trans('ocv.image') }}
                </h4>
            </div>
            <div class="modal-body" style="overflow: hidden">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <a id="aPrevArticle" href="" data-lightbox="datalightbox-2" style="text-align: center">
                            <img id="imgPrevArticle" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <div id="uploadArticleImage">
                            <input id="fileArticleImage" type="file" >
                            <div id="progressBarArticle" style="margin-top: 10px;background-color: #00a7d0; width: 0">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-12 form-group ">
                        <div class="error alert alert-danger hidden">
                            <strong>
                                {!! trans('ocv.sorry') !!}
                            </strong>
                            <ul>

                            </ul>
                        </div>
                    </div>
                </div>

                <img class="loading hidden" src="{{ asset('public/img/ajax-loader.gif') }}" alt="loading"/>

                <a id="btnDeleteArticleImage" class="btn btn-danger" href="javascript:void(0);" >
                    {{ trans('ocv.delete_image') }}
                </a>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    {{ trans('ocv.close') }}
                </button>
            </div>
        </div>
    </div>
</div>


