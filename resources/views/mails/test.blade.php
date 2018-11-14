<form role="form">
  @foreach($email as $key => $value)
    <div class="form-group">
      <label for="name">用户{{ $value }}的邮箱：</label>
      <input type="text" class="form-control" id="name" placeholder="请输入名称" value="{{ $value }}">
    </div>
  @endforeach

  <div class="form-group">
    <label for="inputfile">文件输入</label>
    <input type="file" id="inputfile">
    <p class="help-block">这里是块级帮助文本的实例。</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox">请打勾
    </label>
  </div>
  <button type="submit" class="btn btn-default">提交</button>
</form>

