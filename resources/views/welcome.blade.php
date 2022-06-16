@extends('layouts.app')

@section('homecontent')
<div class="homecontentwrapper">
    <div class="personalised">
        <img src="{{asset('images/personalised.svg')}}" alt="">
        <button>Aan de slag</button>
    </div>
    <div class="about">
        <article>
            <h1>Over EPK Media</h1>
            <p>            
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus tellus mauris, eu elementum risus mollis in. Vestibulum ullamcorper nunc ipsum, ut luctus nibh bibendum vitae. Quisque nisl velit, ornare non orci quis, consectetur egestas mi. Nam pretium sit amet eros et dignissim. Nullam egestas turpis in leo imperdiet, nec consequat eros pulvinar. In erat sapien, volutpat a maximus scelerisque, placerat a sapien. Praesent sapien enim, tristique at finibus vitae, placerat in sapien. Nam a suscipit enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris id velit vitae purus egestas blandit. Aenean ac eros vitae erat gravida pharetra.
                Nunc est odio, vestibulum sed pharetra vel, rutrum et est. Aliquam in sem ultrices, mollis metus eu, euismod nulla. Phasellus vulputate molestie purus sit amet tincidunt. Phasellus nec mauris ut tortor tempor venenatis nec quis velit. Duis ullamcorper commodo mauris et accumsan. Maecenas ut efficitur enim, vitae ornare lacus. Morbi aliquam commodo felis, sit amet maximus enim bibendum a. Quisque eget diam ac mi sollicitudin porttitor eu vitae justo. Proin porta enim in diam rutrum iaculis. Mauris et urna nec risus auctor rhoncus at eget neque. Suspendisse potenti. Mauris quis luctus tortor, sed aliquam erat. Cras.
            </p>
        </article>
            <img src="{{asset('images/about.svg')}}" alt="">
    </div>
</div>
@endsection
