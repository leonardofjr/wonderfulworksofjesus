@extends('frontend.layouts.app')
@section('title', 'Wonderful Works Of Jesus')
@section('meta-description', 'Jesus Lives Here')
@section('content')
    <section class="container my-5">
        <div class="row">
            <div class="col-md-9">
                <h2>Help Protect Christian Rights</h2>
                <p>Wonderful Works Of Jesus is a non-profit organization, not a registered charity. Our work focuses on complex issues of Christian Persecution, rights of Christians. By giving to Wonderful Works of Jesus, you’re helping to build systemic change that will empower and improve the lives of Christians across Canada, the world, and defend our human rights.</p>
            </div>

            <div class="col-md-3">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick"><br>
                    <input type="hidden" name="hosted_button_id" value="ZB9LCH56LPVUJ"><br>
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button"><br>
                    <img alt="" border="0" src="https://www.paypal.com/en_CA/i/scr/pixel.gif" width="1" height="1"><br>
                </form>
            </div>
        </div>
    </section>
@endsection