<div class="visible-print text-center">
    {!! QrCode::size(100)->generate(Request::url()); QrCode::backgroundColor(255, 0, 0, 25); !!}

    <p>Scan me to return to the original page.</p>
</div>
