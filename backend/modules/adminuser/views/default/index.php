<script src="/js/sweetalert2.js"></script>
<link rel="stylesheet" href="/css/sweetalert2.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="/js/sweetalertcore.js"></script>
<div class="adminuser-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>

<script type="text/javascript">
swal({
    title: '错误！',
    text: '是否继续',
    type: 'error',
    confirmButtonText: '酷'
})
</script>