<?php
namespace App\Controllers;
use App\Models\TaskModel;

class Tasks extends BaseController
{
    private TaskModel $tasks;
    public function __construct(){ $this->tasks = new TaskModel(); }
    public function index(): string { return view('tasks/index', ['title'=>'Task List','activePage'=>'tasks','tasks'=>$this->tasks->orderedByDate()]); }
    public function new(): string { return view('tasks/form', ['title'=>'New Task','activePage'=>'tasks','task'=>null,'action'=>site_url('tasks/create')]); }
    public function create(){ $rules=['title'=>'required|max_length[150]','task_date'=>'required|valid_date[Y-m-d]']; if(!$this->validate($rules)){return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());} $this->tasks->insert(['title'=>trim((string)$this->request->getPost('title')),'status'=>$this->request->getPost('status')?:'pending','task_date'=>$this->request->getPost('task_date'),'created_at'=>date('Y-m-d H:i:s'),'is_archived'=>0]); return redirect()->to(site_url('tasks'))->with('message','Task created.'); }
    public function edit(int $id): string { return view('tasks/form', ['title'=>'Edit Task','activePage'=>'tasks','task'=>$this->tasks->find($id),'action'=>site_url('tasks/update/'.$id)]); }
    public function update(int $id){ $rules=['title'=>'required|max_length[150]','task_date'=>'required|valid_date[Y-m-d]']; if(!$this->validate($rules)){return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());} $this->tasks->update($id,['title'=>trim((string)$this->request->getPost('title')),'status'=>$this->request->getPost('status')?:'pending','task_date'=>$this->request->getPost('task_date')]); return redirect()->to(site_url('tasks'))->with('message','Task updated.'); }
    public function delete(int $id){ $this->tasks->update($id,['is_archived'=>1]); return redirect()->to(site_url('tasks'))->with('message','Task archived.'); }
}
