@extends('layout.main')
@section('title', 'login')
@section('content')
<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Contact</h1>
<!-- Content Row -->
<div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194472.6747714288!2d49.71487296415121!3d40.394769471246086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2z0JHQsNC60YMsINCQ0LfQtdGA0LHQsNC50LTQttCw0L0!5e0!3m2!1sru!2s!4v1668115584376!5m2!1sru!2s"></iframe>

    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
            3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
        </p>
        <p>
            <abbr title="Phone">P</abbr>: (123) 456-7890
        </p>
        <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">name@example.com
            </a>
        </p>
        <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form action="/contact" method="POST">
            @csrf
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="contact_email" placeholder="email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea name="contact_text" class="form-control" required maxlength="1000" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>
            <button type="submit" class="btn btn-success">send message</button>
        </form>
    </div>
</div>

@endsection