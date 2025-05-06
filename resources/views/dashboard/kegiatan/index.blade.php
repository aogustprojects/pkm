<x-main-dashboard></x-main-dashboard>

<div class="px-2 py-2">
  <div class="grid lg:grid-cols-1 py-5 px-5 lg:grid-rows-2">
    <div class="relative lg:row-span-2">
      <div class="relative max-lg:row-start-1">
        <div class="absolute inset-px rounded-lg shadow-lg border flex flex-col md:flex-row"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
          <div class="px-8 py-8 sm:px-10 sm:pt-10">

            @if (session('success'))
            <script>
              alert("Sukses! {{ addslashes(session('success')) }}");
            </script>
            @endif

            <div class="flex flex-col lg:flex-row justify-between items-center mb-5 gap-4">
              <p class="text-lg font-medium tracking-tight text-gray-950">List Realisasi Kegiatan Bulanan</p>

              <form action="{{ route('dashboard.kegiatan.index') }}" method="GET" class="flex items-center w-full max-w-xl gap-2">
                <div class="relative w-full">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass text-gray-500"></i>
                  </div>
                  <input type="text" name="search" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                    placeholder="Cari Kegiatan..." value="{{ request('search') }}" />
                </div>
                <div class="relative w-32">
                  <select name="year" id="year-filter"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    onchange="this.form.submit()">
                    @foreach ($years as $year)
                      <option value="{{ $year }}" {{ $selectedYear == $year ? 'selected' : '' }}>
                        {{ $year }}
                      </option>
                    @endforeach
                  </select>
                </div>
                <button type="submit"
                  class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                  <i class="fa fa-search"></i>
                  <span class="sr-only">Search</span>
                </button>
              </form>

              <div class="flex items-center space-x-2">
                <button type="button" id="edit-btn" onclick="toggleEditMode(true)"
                  class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 text-sm">
                  Edit
                </button>
                <button type="submit" form="goals-form" id="save-btn"
                  class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 text-sm hidden">
                  Save
                </button>
                <a href="{{ route('dashboard.kegiatan.create') }}"
                  class="bg-blue-700 rounded-lg px-4 py-2 text-sm text-white hover:bg-blue-900">
                  Tambah Realisasi
                </a>
              </div>
            </div>

            <form id="goals-form" action="{{ route('dashboard.kegiatan.update-goals') }}" method="POST">
              @csrf
              <input type="hidden" name="year" value="{{ $selectedYear }}" />
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th class="px-6 py-3 text-center">No</th>
                      <th class="px-6 py-3">Nama Kegiatan</th>
                      <th class="px-6 py-3 text-center">PJ Program</th>
                      <th class="px-6 py-3 text-center">Tahun</th>
                      <th class="px-6 py-3 text-center">Target</th>
                      <th class="px-6 py-3 text-center">Realisasi</th>
                      <th class="px-6 py-3 text-center">Persentase</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $item)
                      @php
                        $realisasi = $item->realisasi->first();
                        $goals = $realisasi ? ($realisasi->goals ?? []) : [];
                        $totalRealisasi = array_sum(array_map('intval', $goals));
                        $target_bulanan = $realisasi ? ($realisasi->target_bulanan ?? []) : [];
                        $totalTarget = array_sum(array_map('intval', $target_bulanan));
                        $persentase = $totalTarget > 0 ? round(($totalRealisasi / $totalTarget) * 100, 2) : 0;
                      @endphp
                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 kegiatan-row" data-item-id="{{ $item->id }}">
                        <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">
                          <button type="button" class="text-left hover:underline" onclick="selectKegiatan('{{ $item->id }}')">
                            {{ $item->nama_kegiatan ?? '-' }}
                          </button>
                        </td>
                        <td class="px-6 py-4 text-center">{{ $item->pj_kegiatan ?? '-' }}</td>
                        <td class="px-6 py-4 text-center">
                          {{ $realisasi ? $realisasi->tahun : '-' }}
                        </td>
                        <td class="px-6 py-4 text-center">
                          {{ $totalTarget }}
                        </td>
                        <td class="px-6 py-4 text-center">
                          {{ $totalRealisasi }}
                        </td>
                        <td class="px-6 py-4 text-center {{ $persentase == 100 ? 'text-green-500 bg-green-100 dark:bg-green-900 dark:text-green-300' : 'text-red-500 bg-red-100 dark:bg-red-900 dark:text-red-300' }}">
                          {{ $persentase }}%
                        </td>
                      </tr>
                      <tr class="bg-gray-100 dark:bg-gray-600 kegiatan-details hidden" data-item-id="{{ $item->id }}">
                        <td colspan="7" class="px-6 py-2">
                          <p class="text-sm text-center font-semibold text-gray-800 dark:text-gray-200">Target Bulanan</p>
                          <hr>
                        </td>
                      </tr>
                      <tr class="bg-gray-100 dark:bg-gray-600 kegiatan-details hidden" data-item-id="{{ $item->id }}">
                        <td colspan="7" class="px-6 py-4">
                          <div class="grid grid-cols-12 gap-2">
                            @foreach (['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'] as $month)
                              <div class="flex flex-col items-center">
                                <span class="text-sm font-medium text-gray-700 mb-1">{{ $month }}</span>
                                <input type="number" name="target_bulanan[{{ $item->id }}][{{ strtolower($month) }}]"
                                  value="{{ $realisasi ? ($realisasi->target_bulanan[strtolower($month)] ?? '') : '' }}"
                                  class="target-input w-24 text-center border border-gray-300 rounded-lg p-1 focus:ring-blue-500 focus:border-blue-500"
                                  data-item-id="{{ $item->id }}"
                                  data-month="{{ strtolower($month) }}"
                                  disabled />
                              </div>
                            @endforeach
                          </div>
                        </td>
                      </tr>
                      <tr class="bg-gray-50 dark:bg-gray-700 kegiatan-details hidden" data-item-id="{{ $item->id }}">
                        <td colspan="7" class="px-6 py-2">
                          <p class="text-sm text-center font-semibold text-gray-800 dark:text-gray-200">Realisasi Bulanan</p>
                          <hr>
                        </td>
                      </tr>
                      <tr class="bg-gray-50 dark:bg-gray-700 kegiatan-details hidden" data-item-id="{{ $item->id }}">
                        <td colspan="7" class="px-6 py-4">
                          <div class="grid grid-cols-12 gap-2">
                            @foreach (['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'] as $month)
                              <div class="flex flex-col items-center">
                                <span class="text-sm font-medium text-gray-700 mb-1">{{ $month }}</span>
                                <input type="number" name="goals[{{ $item->id }}][{{ strtolower($month) }}]"
                                  value="{{ $realisasi ? ($realisasi->goals[strtolower($month)] ?? '') : '' }}"
                                  class="goal-input w-24 text-center border border-gray-300 rounded-lg p-1 focus:ring-blue-500 focus:border-blue-500"
                                  data-item-id="{{ $item->id }}"
                                  data-month="{{ strtolower($month) }}"
                                  disabled />
                              </div>
                            @endforeach
                          </div>
                        </td>
                      </tr>
                      <tr class="bg-gray-50 dark:bg-gray-700 kegiatan-details hidden" data-item-id="{{ $item->id }}">
                        <td colspan="7" class="px-6 py-2">
                          <p class="text-sm text-center font-semibold text-gray-800 dark:text-gray-200">Realisasi Kumulatif Per Triwulan</p>
                          <hr>
                        </td>
                      </tr>
                      <tr class="bg-gray-50 dark:bg-gray-700 kegiatan-details hidden" data-item-id="{{ $item->id }}">
                        <td colspan="7" class="px-6 py-4">
                          <div class="grid grid-cols-12 gap-2">
                            @foreach (['Triwulan 1', 'Triwulan 2', 'Triwulan 3', 'Triwulan 4'] as $triwulan)
                              <div class="flex flex-col items-center text-center">
                                <span class="text-sm font-medium text-gray-700 mb-1">{{ $triwulan }}</span>
                                <input type="number"
                                  class="triwulan-input w-24 text-center border border-gray-300 rounded-lg p-1 bg-gray-200"
                                  data-item-id="{{ $item->id }}"
                                  data-triwulan="{{ strtolower(str_replace(' ', '', $triwulan)) }}"
                                  readonly />
                                <span class="triwulan-percentage text-sm mt-1"
                                  data-item-id="{{ $item->id }}"
                                  data-triwulan="{{ strtolower(str_replace(' ', '', $triwulan)) }}">
                                  0%
                                </span>
                              </div>
                            @endforeach
                          </div>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="7" class="text-center px-6 py-4">Data belum tersedia</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  input.goal-input[type="number"],
  input.target-input[type="number"],
  input.triwulan-input[type="number"] {
    -webkit-appearance: none;
    -moz-appearance: textfield;
    appearance: none;
  }

  input.goal-input[type="number"]::-webkit-inner-spin-button,
  input.goal-input[type="number"]::-webkit-outer-spin-button,
  input.target-input[type="number"]::-webkit-inner-spin-button,
  input.target-input[type="number"]::-webkit-outer-spin-button,
  input.triwulan-input[type="number"]::-webkit-inner-spin-button,
  input.triwulan-input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  .kegiatan-row.selected {
    background-color: #e0f2fe;
  }

  .dark .kegiatan-row.selected {
    background-color: #1e40af;
  }

  .triwulan-percentage.percentage-100 {
    color: #22c55e; /* Green-500 */
    background-color: #dcfce7; /* Green-100 */
  }

  .dark .triwulan-percentage.percentage-100 {
    color: #86efac; /* Green-300 */
    background-color: #14532d; /* Green-900 */
  }

  .triwulan-percentage.percentage-below-100 {
    color: #ef4444; /* Red-500 */
    background-color: #fee2e2; /* Red-100 */
  }

  .dark .triwulan-percentage.percentage-below-100 {
    color: #f87171; /* Red-300 */
    background-color: #7f1d1d; /* Red-900 */
  }
</style>

<script>
  let isEditMode = false;
  let selectedKegiatanId = null;

  function toggleEditMode(enable) {
    isEditMode = enable;
    const editBtn = document.getElementById('edit-btn');
    const saveBtn = document.getElementById('save-btn');
    const goalInputs = document.querySelectorAll('.goal-input');
    const targetInputs = document.querySelectorAll('.target-input');
    const triwulanInputs = document.querySelectorAll('.triwulan-input');

    if (isEditMode) {
      editBtn.classList.add('hidden');
      saveBtn.classList.remove('hidden');
      goalInputs.forEach(input => input.removeAttribute('disabled'));
      targetInputs.forEach(input => input.removeAttribute('disabled'));
      triwulanInputs.forEach(input => input.setAttribute('readonly', 'true'));
    } else {
      editBtn.classList.remove('hidden');
      saveBtn.classList.add('hidden');
      goalInputs.forEach(input => input.setAttribute('disabled', 'true'));
      targetInputs.forEach(input => input.setAttribute('disabled', 'true'));
      triwulanInputs.forEach(input => input.setAttribute('readonly', 'true'));
    }
  }

  function selectKegiatan(itemId) {
    if (selectedKegiatanId === itemId) {
      document.querySelectorAll(`.kegiatan-details[data-item-id="${itemId}"]`).forEach(row => {
        row.classList.add('hidden');
      });
      const selectedRow = document.querySelector(`.kegiatan-row[data-item-id="${itemId}"]`);
      if (selectedRow) {
        selectedRow.classList.remove('selected');
      }
      selectedKegiatanId = null;
      return;
    }

    document.querySelectorAll('.kegiatan-details').forEach(row => {
      row.classList.add('hidden');
    });

    document.querySelectorAll('.kegiatan-row').forEach(row => {
      row.classList.remove('selected');
    });

    document.querySelectorAll(`.kegiatan-details[data-item-id="${itemId}"]`).forEach(row => {
      row.classList.remove('hidden');
    });

    const selectedRow = document.querySelector(`.kegiatan-row[data-item-id="${itemId}"]`);
    if (selectedRow) {
      selectedRow.classList.add('selected');
    }

    selectedKegiatanId = itemId;
    updateTriwulanTotals(itemId);
  }

  function updateTriwulanTotals(itemId) {
    const months = ['jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des'];
    const triwulan = {
      triwulan1: ['jan', 'feb', 'mar'],
      triwulan2: ['apr', 'mei', 'jun'],
      triwulan3: ['jul', 'agu', 'sep'],
      triwulan4: ['okt', 'nov', 'des']
    };

    let cumulativeGoals = 0;
    let cumulativeTarget = 0;

    Object.keys(triwulan).forEach(tri => {
      let triwulanGoalsTotal = 0;
      let triwulanTargetTotal = 0;
      let hasInput = false;

      triwulan[tri].forEach(month => {
        const goalInput = document.querySelector(`.goal-input[data-item-id="${itemId}"][data-month="${month}"]`);
        const targetInput = document.querySelector(`.target-input[data-item-id="${itemId}"][data-month="${month}"]`);
        const goalValue = goalInput ? parseInt(goalInput.value) || 0 : 0;
        const targetValue = targetInput ? parseInt(targetInput.value) || 0 : 0;
        triwulanGoalsTotal += goalValue;
        triwulanTargetTotal += targetValue;
        if (goalValue > 0 || targetValue > 0) {
          hasInput = true;
        }
      });

      const triwulanInput = document.querySelector(`.triwulan-input[data-item-id="${itemId}"][data-triwulan="${tri}"]`);
      const percentageSpan = document.querySelector(`.triwulan-percentage[data-item-id="${itemId}"][data-triwulan="${tri}"]`);

      if (hasInput) {
        cumulativeGoals += triwulanGoalsTotal;
        cumulativeTarget += triwulanTargetTotal;

        if (triwulanInput) {
          triwulanInput.value = cumulativeGoals;
        }

        if (percentageSpan) {
          const percentage = cumulativeTarget > 0 ? Math.round((cumulativeGoals / cumulativeTarget) * 100) : 0;
          percentageSpan.textContent = `${percentage}%`;
          percentageSpan.classList.remove('percentage-100', 'percentage-below-100');
          if (percentage === 100) {
            percentageSpan.classList.add('percentage-100');
          } else {
            percentageSpan.classList.add('percentage-below-100');
          }
        }
      } else {
        if (triwulanInput) {
          triwulanInput.value = '';
        }
        if (percentageSpan) {
          percentageSpan.textContent = '';
          percentageSpan.classList.remove('percentage-100', 'percentage-below-100');
        }
      }
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    isEditMode = false;
    const goalInputs = document.querySelectorAll('.goal-input');
    const targetInputs = document.querySelectorAll('.target-input');
    const triwulanInputs = document.querySelectorAll('.triwulan-input');

    goalInputs.forEach(input => input.setAttribute('disabled', 'true'));
    targetInputs.forEach(input => input.setAttribute('disabled', 'true'));
    triwulanInputs.forEach(input => input.setAttribute('readonly', 'true'));

    goalInputs.forEach(input => {
      input.addEventListener('input', () => {
        if (selectedKegiatanId === input.dataset.itemId) {
          updateTriwulanTotals(input.dataset.itemId);
        }
      });
    });

    targetInputs.forEach(input => {
      input.addEventListener('input', () => {
        if (selectedKegiatanId === input.dataset.itemId) {
          updateTriwulanTotals(input.dataset.itemId);
        }
      });
    });
  });
</script>