@extends('layouts.app')

@section('title', 'Social Media Meta Tags Debug')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Social Media Meta Tags Debug</h1>
            <p>This page helps you debug social media sharing meta tags.</p>
            
            <div class="card mt-4">
                <div class="card-header">
                    <h5>Current Meta Tags</h5>
                </div>
                <div class="card-body">
                    <h6>Open Graph Image URL:</h6>
                    <p><code>{{ get_social_image_url() }}</code></p>
                    
                    <h6>Image Access Test:</h6>
                    <p>
                        <img src="{{ get_social_image_url() }}" alt="BVVD Banner" style="max-width: 300px; height: auto;" class="img-thumbnail">
                    </p>
                    
                    <h6>Cache Busting Info:</h6>
                    <ul>
                        <li>Current timestamp: <code>{{ time() }}</code></li>
                        <li>Today's date: <code>{{ date('Y-m-d') }}</code></li>
                        <li>Cache bust parameter: <code>?v={{ date('Y-m-d') }}</code></li>
                    </ul>
                </div>
            </div>
            
            <div class="card mt-4">
                <div class="card-header">
                    <h5>Social Media Testing Tools</h5>
                </div>
                <div class="card-body">
                    <h6>Facebook Debugger:</h6>
                    <p><a href="https://developers.facebook.com/tools/debug/" target="_blank" class="btn btn-primary">Facebook Sharing Debugger</a></p>
                    
                    <h6>Twitter Card Validator:</h6>
                    <p><a href="https://cards-dev.twitter.com/validator" target="_blank" class="btn btn-info">Twitter Card Validator</a></p>
                    
                    <h6>LinkedIn Post Inspector:</h6>
                    <p><a href="https://www.linkedin.com/post-inspector/" target="_blank" class="btn btn-secondary">LinkedIn Post Inspector</a></p>
                    
                    <h6>Clear Social Cache:</h6>
                    <p><a href="{{ route('clear.social.cache') }}" target="_blank" class="btn btn-warning">Clear Social Media Cache</a></p>
                </div>
            </div>
            
            <div class="card mt-4">
                <div class="card-header">
                    <h5>Instructions for Zalo</h5>
                </div>
                <div class="card-body">
                    <ol>
                        <li>Copy your website URL</li>
                        <li>Paste it in Zalo chat</li>
                        <li>Wait for Zalo to fetch the preview</li>
                        <li>If you see old image, wait 5-10 minutes and try again</li>
                        <li>You can also try adding <code>?clear=1</code> to your URL when sharing</li>
                    </ol>
                    
                    <div class="alert alert-info">
                        <strong>Note:</strong> Zalo caches social media previews for performance. 
                        The cache will automatically refresh daily with our new cache busting system.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
