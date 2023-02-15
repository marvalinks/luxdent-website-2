<div>
    <table class="table table-bordered table-striped margin-bottom-10">
        <thead>
            <tr>
                <th>#</th>
                <th>Course</th>
                <th style="width: 35%;">Name</th>
                <th>Amount (£)</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cmodules as $key => $module)
            <tr>
                <td>
                    <input type="checkbox" wire:click="fireModule" wire:model="modules.{{ $module->moduleid }}" value="{{$module->cost}}" name="" id="">
                </td>
                <td>{{$course->title}}</td>
                <td>{{$module->name}}</td>
                <td>{{number_format($module->cost, 2)}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">
                    <p>No modules loaded</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div style="width: 25%;margin-left: auto;">
        <h5 class="tsm">TRANSACTION SUMMARY</h5>
        <table class="table table-bordered table-hover" id="tft">
            <thead>
                <tr>
                    <th style="width: 82px;">TOTAL COST (£)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-right" style="font-size: 20px;">{{number_format($total_cost, 2)}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="width: 25%;margin-left: auto;">
        <a wire:click="payment" {{floatval($total_cost) < floatval(1) ? 'disabled' : ''}} class="btn btn-danger btn-icon-fixed"><span class="icon-menu-circle"></span> Proceed to payment</a>
    </div>
</div>
