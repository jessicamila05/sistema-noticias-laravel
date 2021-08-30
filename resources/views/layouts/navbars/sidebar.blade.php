<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('CN') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('Crud de Notícias') }}</a>
        </div>
        <ul class="nav">
            <li>
                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'Cadastrar') class="active " @endif>
                            <a href="{{url('noticias/create')}}">
                                <p>{{ _('Cadastrar Notícia') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--<li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ _('Icons') }}</p>
                </a>
            </li>-->
        </ul>
    </div>
</div>
