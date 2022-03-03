 <?php
 function returnredirectAccordingtobtn($request){
        if ($request->has('submit') && $request->submit === 'index') {
            return redirect()->route('dashboard.products.index')->with('success, operation successful');
        } else return redirect()->back()->with('success, operation successful');
 }

