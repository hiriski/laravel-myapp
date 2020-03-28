<template>
    <div class="container">
        <div class="row justify-content-center">        
            <div class="col-sm-12 col-md-11">
                <div class="card">
                    <div class="card-body block-padding-lg">
                        <div class="card-title mb-5">
                            <h3>Create new blog</h3>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control rux-input"  name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="title">Slug</label>
                                <input id="slug" type="text" class="form-control rux-input" name="slug" placeholder="Slug">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Categrory</label>
                                <select class="form-control rux-input">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control rux-input default" name="desciption" id=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="keywords">Keywords</label>
                                <textarea class="form-control rux-input default" name="keywords" id=""></textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Content</label>
                                <textarea class="textarea-tinymce form-control rux-input" name="content" id=""></textarea>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="submit-btn btn btn-lg btn-primary rux-btn">Submit <i class="material-icons">arrow_forward</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('component add blog mounted!');
    }
}
</script>