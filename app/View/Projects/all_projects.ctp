<div class="row">
    <div class="pull-right">
        <?php echo $this->Html->link(__('New Project'), array('action' => 'add'),array('class'=>'btn btn-primary')); ?>
    </div>
    <div class="projects index">
        <h2><?php echo __('Projects');?></h2>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th><?php echo $this->Paginator->sort('project_name');?></th>
                <th><?php echo $this->Paginator->sort('account_name');?></th>
                <th><?php echo $this->Paginator->sort('project_type');?></th>
                <th><?php echo $this->Paginator->sort('start_date');?></th>
                <th><?php echo $this->Paginator->sort('end_date');?></th>
                <th class="actions"><?php echo __('Actions');?></th>
            </tr>
            <?php
            if(count($projects)>0){
            foreach ($projects as $project){ ?>
                <tr>
                    <td><?php echo h($project['Project']['project_name']); ?>&nbsp;</td>
                    <td><?php echo h($project['Project']['account_name']); ?>&nbsp;</td>
                    <td><?php echo h($project['Project']['project_type']); ?>&nbsp;</td>
                    <td><?php echo h(date('d-m-Y',strtotime($project['Project']['start_date']))); ?>&nbsp;</td>
                    <td><?php echo h(date('d-m-Y',strtotime($project['Project']['end_date']))); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__(''), array('action' => 'view', $project['Project']['id']), array('class' => 'icon-eye-open'));
                        echo $this->Html->link(__(''), array('action' => 'edit', $project['Project']['id']), array('class' => 'icon-edit'));
                        echo $this->Html->link(
                        '', array('action' => 'delete', $project['Project']['id']), array(
                        'class' => 'icon-trash',
                        ),
                        __('You are about to delete %s', '"'.$project['Project']['project_name']. '", Are you sure?')
                        ); ?>
                    </td>
                </tr>
                <?php } } else{ ?>
                <tr>
                    <td colspan="6">No projects are added yet.</td>
                </tr>
                <?php } ?>
        </table>

        <?php
        $hasPages = ($this->params['paging']['Project']['pageCount'] > 1);

        if ($hasPages)
        {
            echo $this->element('pagination');
        } ?>
    </div>
</div>
