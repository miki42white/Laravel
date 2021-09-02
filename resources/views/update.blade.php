@extends('layouts.index')
<style>
  .container{
    background-color: #2d197c;
    width:100vw;
    height:100vh;
    position:relative;
  }
  .card{
    border:1px solid #0000;
    border-radius: 10px;
    background-color: #ffff;
    width:50%;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    padding:0 20px 20px 20px;
  }
  .title{
    font-size:25px;
    font-weight:bold;
  }
  .table-wrap{
    display: flex;
  }
  input{
    border:1px solid #eeeeee;
    border-radius: 3px;
  }
  .add-btn,
  .update-btn,
  .delete-btn{
    background-color: #ffff;
    border-radius: 5px;
    padding:5px 15px;
  }
  .add-btn{
    border:2px solid #ff88ff;
    color:#ff88ff;
  }
  .update-btn{
    border:2px solid #ff8856;
    color:#ff8856;
  }
  .delete-btn{
    border:2px solid #77f9c3;
    color:#77f9c3;
  }
  .add-btn:hover{
    background-color: #ff88ff;
    color:#ffff;
  }
  .update-btn:hover{
    background-color: #ff8856;
    color:#ffff;
  }
  .delete-btn:hover{
    background-color: #77f9c3;
    color:#ffff;
  }
</style>

@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif

<body>
<div class="container">
  <div class="card">
    <p class="title">Todo List</p>
    <div class="todo">
      <form action="/todo/create" method="POST">
      @csrf
      <input type="text" name="content">
      <input type="submit" value="追加" class="add-btn">
    </form>
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      <tr>
        <td>
        </td>
        <form action="" method="POST"></form>
        <td>
        <input type="text" class="input-update" value="" name="content">
        </td>
        <td>
          <button class="update-btn">更新</button>
        </td>
        <td>
          <button class="delete-btn">削除</button>
        </td>
      </tr>
    </table>
    </div>
  </div>
</div>
</body>
</html>
