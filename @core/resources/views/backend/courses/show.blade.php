@extends('backend.admin-master')
@section('site-title')
    {{ $course->name }}
@endsection
@section('content')
    <div class="col pt-5">
        <div class="mb-3">
            @include('backend.partials.message')
        </div>
        <div id="action-buttons" class="mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                Add student
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog"
                aria-labelledby="addStudentModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addStudentModalLabel">Add student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.courses.students.add', $course->id) }}" id="add-student-form"
                                method="post">
                                @csrf

                                <input type="hidden" name="course_id" value="{{ $course->id }}">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="1">Completed</option>
                                        <option value="0">Not Completed</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" form="add-student-form" class="btn btn-primary">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Import students Modal -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#importStudentModal">
                Import students
            </button>

            <!-- Modal -->
            <div class="modal fade" id="importStudentModal" tabindex="-1" role="dialog"
                aria-labelledby="importStudentModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="importStudentModalLabel">Import students</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.courses.students.import', $course->id) }}"
                                id="import-students-form" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="course_id" value="{{ $course->id }}">

                                <div class="form-group">
                                    <label for="file">Select File</label>
                                    <input type="file" id="file" name="file" accept=".xlsx, .xls, .csv"
                                        class="form-control" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" form="import-students-form" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Delete confirmation Modal -->
            <button id="delete-students-modal-trigger" type="button" class="btn btn-danger" data-toggle="modal"
                data-target="#deleteStudentsModal">
                Delete
            </button>

            <div class="modal fade" id="deleteStudentsModal" tabindex="-1" role="dialog"
                aria-labelledby="deleteStudentsModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteStudentsModalLabel">Delete students</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.students.destroy') }}" id="delete-students-form" method="post">
                                @csrf

                                <input type="hidden" name="ids" id="selected-students">
                            </form>
                            <p>You are going to delete <span class="selected">0</span> students. Are you sure?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" form="delete-students-form" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{ __('Students') }}</h4>

                        @if ($students && count($students))
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="checkAll">
                                        </th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $key => $student)
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check" value="{{ $student->id }}">
                                            </td>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>
                                                @if ($student->status == 1)
                                                    <span class="badge badge-success">Completed</span>
                                                @else
                                                    <span class="badge badge-danger">Not Completed</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button data-name="{{ $student->name }}"
                                                    data-status="{{ $student->status }}"
                                                    data-edit-url="{{ route('admin.students.update', $student->id) }}"
                                                    class="btn btn-sm btn-info edit-student">Edit</button>

                                                <a target="_blank" href="{{ route('admin.students.certificates.show', $student->id) }}" class="btn btn-sm btn-success">Show Certificate</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No students in this course!</p>
                        @endif

                        @if ($students->hasPages())
                            <div class="my-4">
                                {{ $students->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Course Info</h4>

                        <table class="table border">
                            <tr>
                                <th>Name</th>
                                <td>{{ $course->name }}</td>
                            </tr>
                            <tr>
                                <th>Students</th>
                                <td>{{ $course->students()->count() }}</td>
                            </tr>
                            <tr>
                                <th>From</th>
                                <td>{{ $course->from() }}</td>
                            </tr>
                            <tr>
                                <th>To</th>
                                <td>{{ $course->to() }}</td>
                            </tr>
                        </table>

                        <div class="mt-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editCourseModal">
                                Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editCourseModal" tabindex="-1" role="dialog"
                                aria-labelledby="editCourseModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editCourseModalLabel">Edit course</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.courses.update', $course->id) }}" id="edit-course-form"
                                                method="post">
                                                @csrf

                                                @method('PATCH')

                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}" class="form-control"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="certificate_description">Certificate Description</label>
                                                    <input type="text" id="certificate_description"
                                                        name="certificate_description" value="{{ old('certificate_description', $course->certificate_description) }}" class="form-control" required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="start_date">Start Date</label>
                                                            <input type="date" id="start_date" value="{{ old('start_date', $course->start_date) }}" name="start_date"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="end_date">End Date</label>
                                                            <input type="date" id="end_date" value="{{ old('end_date', $course->end_date) }}" name="end_date"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" form="edit-course-form" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteCourseModal">Delete</button>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteCourseModal" tabindex="-1" role="dialog"
                                aria-labelledby="deleteCourseModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteCourseModalLabel">Delete course</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.courses.destroy', $course->id) }}" id="delete-course-form"
                                                method="post">
                                                @csrf

                                                @method('DELETE')

                                            </form>
                                            <p>You are going to delete this course. Remember you can't recover the data once you have deleted it. Continue?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" form="delete-course-form" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Certificates</h4>
                            <div class="d-flex">
                                <form action="{{ route('admin.students.certificates.generate', $course->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-primary" type="submit" id="generate-button">Generate</button>
                                </form>
            
                                @if ($course->hasDownloadableCertificates())    
                                <form action="{{ route('admin.students.certificates.download', $course->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-success ml-2" type="submit" id="download-certificates-button">Download</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(function() {
            const addStudentModal = $('#addStudentModal');
            const deleteStudentsModalTrigger = $('#delete-students-modal-trigger');

            deleteStudentsModalTrigger.hide();

            function clearStudentModal() {
                addStudentModal.on('hidden.bs.modal', function(e) {
                    $(this).find('#name').val('');
                    $(this).find('#status').val('1');
                })
            }

            clearStudentModal()


            $('.edit-student').click(function() {
                const name = $(this).data('name')
                const status = $(this).data('status')
                const url = $(this).data('edit-url')

                addStudentModal.find('#addStudentModalLabel').text(`Edit student`)

                const form = addStudentModal.find('#add-student-form')
                const oldUrl = form.attr('action')

                form.attr('action', url)

                if (!form.find('input[name="_method"]').length) {
                    form.append(`<input type='hidden' name="_method" value="PATCH">`)
                }


                form.find('#name').val(name)
                form.find('#status').val(status)

                addStudentModal.modal('show')

                addStudentModal.on('hidden.bs.modal', function(e) {
                    addStudentModal.find('#addStudentModalLabel').text('Add student')

                    form.attr('action', oldUrl)

                    if (form.find('input[name="_method"]').length) {
                        form.find('input[name="_method"]').remove()
                    }

                    clearStudentModal()

                })
            })

            // check all
            $('#checkAll').click(function(e) {

                if ($(this).prop('checked') == true) {
                    $('.check').each(function(e) {
                        $(this).prop('checked', true);
                    })
                } else {
                    $('.check').each(function(e) {
                        $(this).prop('checked', false);
                    })
                }

                getSelectedValues()
            })

            $('.check').change(getSelectedValues)

            function getSelectedValues() {
                const selectedCount = $('.check:checked').length;
                let selectedIds = [];
                const selectedStudents = $('#selected-students')

                $('#deleteStudentsModal').find('span.selected').text(selectedCount)


                if (selectedCount > 0) {
                    deleteStudentsModalTrigger.show();

                    $('.check:checked').each(function(e) {
                        selectedIds.push($(this).val());
                    })

                    selectedStudents.val(selectedIds)

                } else {
                    deleteStudentsModalTrigger.hide();
                    selectedStudents.val([])
                }
            }

            $('#generate-button, #download-certificates-button').click(function(e){
                $(this).parent().submit();
                $(this).attr('disabled', 'disabled');
            })


        })
    </script>
@endsection
