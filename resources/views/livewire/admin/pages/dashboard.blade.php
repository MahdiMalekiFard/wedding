<div class="space-y-6">
    <!-- Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 mt-4">
        <!-- Total Messages -->
        <div class="group rounded-2xl border border-zinc-200/80 bg-white/70 dark:bg-zinc-900/60 dark:border-zinc-800 shadow-sm hover:shadow-md transition-shadow">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <div class="size-12 rounded-xl bg-blue-500/10 flex items-center justify-center">
                            <i class="fas fa-envelope text-blue-600 dark:text-blue-400 text-2xl"></i>
                        </div>
                    </div>
                    <div class="grow ms-4">
                        <p class="uppercase tracking-wide text-xs font-medium text-zinc-500 dark:text-zinc-400">Total Messages</p>
                        <h4 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100 mt-0.5">
                            {{ $contactStats['total'] }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unread -->
        <div class="group rounded-2xl border border-zinc-200/80 bg-white/70 dark:bg-zinc-900/60 dark:border-zinc-800 shadow-sm hover:shadow-md transition-shadow {{ $contactStats['unread'] ? 'ring-1 ring-amber-400/60' : '' }}">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <div class="size-12 rounded-xl bg-amber-500/10 flex items-center justify-center">
                            <i class="fas fa-eye-slash text-amber-600 dark:text-amber-400 text-2xl"></i>
                        </div>
                    </div>
                    <div class="grow ms-4">
                        <p class="uppercase tracking-wide text-xs font-medium text-zinc-500 dark:text-zinc-400">Unread</p>
                        <h4 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100 mt-0.5">
                            {{ $contactStats['unread'] }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Today -->
        <div class="group rounded-2xl border border-zinc-200/80 bg-white/70 dark:bg-zinc-900/60 dark:border-zinc-800 shadow-sm hover:shadow-md transition-shadow">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <div class="size-12 rounded-xl bg-emerald-500/10 flex items-center justify-center">
                            <i class="fas fa-calendar-day text-emerald-600 dark:text-emerald-400 text-2xl"></i>
                        </div>
                    </div>
                    <div class="grow ms-4">
                        <p class="uppercase tracking-wide text-xs font-medium text-zinc-500 dark:text-zinc-400">Today</p>
                        <h4 class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100 mt-0.5">
                            {{ $contactStats['today'] }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rounded-2xl border border-zinc-200/80 bg-white/80 dark:bg-zinc-900/60 dark:border-zinc-800 shadow-sm overflow-hidden">
        <!-- Table Header -->
        <div class="px-6 py-4 border-b border-zinc-200/70 dark:border-zinc-800">
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="text-lg font-semibold text-zinc-800 dark:text-zinc-100">Unread Contact Messages</h5>
                    <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Recent messages that require your attention</p>
                </div>
                <div class="flex items-center gap-2">
                    <div class="size-2 rounded-full bg-amber-500"></div>
                    <span class="text-sm font-medium text-amber-600 dark:text-amber-400">{{ $contactStats['unread'] }} Unread</span>
                </div>
            </div>
        </div>
        
        <table class="w-full">
            <thead class="bg-zinc-50 dark:bg-zinc-800/50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider border-b border-zinc-200 dark:border-zinc-700">Name</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider border-b border-zinc-200 dark:border-zinc-700">Email</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider border-b border-zinc-200 dark:border-zinc-700">Subject</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider border-b border-zinc-200 dark:border-zinc-700">Date</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-wider border-b border-zinc-200 dark:border-zinc-700">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                @forelse($unreadMessages as $message)
                    <tr class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-900 dark:text-zinc-100">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-8 w-8">
                                    <div class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center">
                                        <span class="text-xs font-medium text-white">{{ substr($message->name, 0, 1) }}</span>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-zinc-900 dark:text-zinc-100">{{ $message->name }}</div>
                                    @if($message->phone)
                                        <div class="text-xs text-zinc-500 dark:text-zinc-400">{{ $message->phone }}</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-900 dark:text-zinc-100">{{ $message->email }}</td>
                        <td class="px-6 py-4 text-sm text-zinc-900 dark:text-zinc-100">
                            <div class="max-w-xs truncate" title="{{ $message->subject }}">
                                {{ $message->subject ?: 'No subject' }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-500 dark:text-zinc-400">
                            {{ $message->created_at->format('M j, Y') }}
                            <div class="text-xs text-zinc-400 dark:text-zinc-500">{{ $message->created_at->format('g:i A') }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-900 dark:text-zinc-100">
                            <a href="{{ route('admin.contact-us.show', $message) }}" 
                               class="inline-flex items-center gap-1 rounded-lg border border-zinc-200 bg-white px-3 py-1.5 text-xs font-medium text-zinc-700 hover:bg-zinc-50 hover:border-zinc-300 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-700 dark:hover:border-zinc-600 transition-colors">
                                <i class="fas fa-eye text-xs"></i>
                                View Details
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-sm text-zinc-500 dark:text-zinc-400">
                            <div class="flex flex-col items-center">
                                <i class="fas fa-inbox text-4xl text-zinc-300 dark:text-zinc-600 mb-2"></i>
                                <span>No unread messages</span>
                                <span class="text-xs mt-1">All caught up!</span>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
