@extends('layouts.app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ms-md-2 ms-lg-5 display-6 fw-bold text-center">About the project</h2>
                </div>
                <div class="col-md-12 my-3">
                    <div style="text-align: justify">
                        This is a sample project named <span style="font-weight: bold">Chatroom</span> developed by laravel 12. This is a
                        project with the main focus on backend and Laravel CRUD operations. In this project, everyone
                        must log in to be able to use the website. Login and Register are the possibilities. After
                        registering/logging in, everyone can see his own messages like a messenger and send new text
                        messages in a page like chatroom. If the number of messages are more than 5, it will clear all
                        messages. It shows the time of creation and the text in addition to who created the message.
                        CRUD operations are available including create, read, update, and delete for each message.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-4 d-flex justify-content-center">
                    <img class="rounded-3"
                         src="{{asset('storage/images/profile.jfif')}}" alt="profile picture">
                </div>
                <div class="col-md-8 my-3">
                    <h2 class="display-6 fw-bold">About Me</h2>
                    <p class="">Hi! I'm Saeed Doozandeh, a passionate web developer with a strong interest in
                        building clean,
                        efficient, and user-friendly applications. I specialize in PHP and Laravel, and I'm constantly
                        learning new technologies to expand my skill set. I enjoy working on both the backend and
                        frontend of web projects, and I'm committed to writing maintainable, scalable code. This Chatroom
                        project is one of many sample applications I’ve developed to practice and demonstrate my skills
                        in Laravel, and I'm excited to keep growing as a developer through hands-on experience and
                        continuous learning.</p>
                    <p>Contact: <a href="mailto:saeed.doozandehce91@gmail.com">saeed.doozandehce91@gmail.com</a> | <a
                                href="https://www.linkedin.com/in/saeeddoozandeh/" target="_blank">LinkedIn</a> | <a
                                href="https://github.com/saeedking2020" target="_blank">GitHub</a> | <a
                                href="https://drive.google.com/file/d/1tQtEb1Hj5s7a4cdMPL761XShu5F75po8/view?usp=drive_link"
                                download>Resume</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
