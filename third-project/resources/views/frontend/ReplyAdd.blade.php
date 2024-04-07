@extends('layouts.frontendMaster')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- section header -->
                <div class="section-header">
                    <h3 class="section-title">Leave Reply</h3>
                    <img src="{{ asset('frontend_assets') }}/images/wave.svg" class="wave" alt="wave" />
                </div>
                <!-- comment form -->
                <div class="comment-form rounded bordered padding-30">
                    <form id="comment-form" class="comment-form" method="post" action="{{ route('reply.store', $comment->id) }}">
                        @csrf
                        <div class="messages"></div>

                        <div class="row">
                            <div class="column col-md-12">
                                <!-- Comment text -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="InputWeb" id="InputWeb"
                                    value="{{ $comment->comment_text }}" disabled>
                                </div>
                            </div>
                            <div class="column col-md-12">
                                <!-- Comment textarea -->
                                <div class="form-group">
                                    <input type="hidden" name="blog_id" value="{{ $comment->blog_id }}">
                                    <input type="hidden" name="replier_id" value="{{ Auth::id() }}">
                                    <textarea name="reply_text" id="InputComment" class="form-control" rows="4" placeholder="Your reply here..." required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
