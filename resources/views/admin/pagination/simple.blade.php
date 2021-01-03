@if(!empty($paginator) && $paginator->count())
<div class="row justify-content-between mt-3">
   <div id="user-list-page-info" class="col-md-6">
      <span>Showing {{$paginator->firstItem()}} to {{$paginator->lastItem()}} of {{$paginator->total()}}
         results</span>
   </div>
   <div class="col-md-6">
      <nav aria-label="Page navigation example">
         <ul class="pagination justify-content-end mb-0">
            @if($paginator->currentPage()==1)
            <li class="page-item disabled">
               <a class="page-link" href="{{$paginator->url(1)}}" aria-disabled="true">First</a>
            </li>
            @else
            <li class="page-item ">
               <a class="page-link" href="{{$paginator->url(1)}}">First</a>
            </li>
            @endif
            {!!$paginator->links() !!}
            <li>
               <a class="page-link" href="{{$paginator->lastPage()}}">Last</a>
            </li>
         </ul>
      </nav>
   </div>
</div>
@else
<tr>
   <td colspan="10">There are no data.</td>
</tr>
@endif